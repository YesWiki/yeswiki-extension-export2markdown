<?php
namespace Export2Markdown;

use League\HTMLToMarkdown\HtmlConverter;

class Export2Markdown
{
    private $archivePath = null;

    public function __construct($wiki)
    {
        $this->wiki = $wiki;
    }

    public function curPage()
    {
        $pageFactory = new PageFactory();
        $pageData = $this->wiki->page;
        $pageData['body'] = $this->wiki->Format($pageData["body"], "wakka");
        $page = $pageFactory->make($pageData);
        return $page->markdown;
    }

    public function makeArchive()
    {
        $zipFile = new \ZipArchive();
        $zipFile->open($this->genArchivePath());

        $pageFactory = new PageFactory();
        $allPages = $this->wiki->LoadAllPages();
        foreach ($allPages as $pageData) {
            $pageData['body'] = $this->wiki->Format($pageData["body"], "wakka");
            $page = $pageFactory->make($pageData);
            $zipFile->addFromString(
                $page->filename,
                $page->markdown
            );
        }
        $zipFile->Close();
        return $this->archivePath;
    }

    public function deleteArchive()
    {
        if (is_null($this->archivePath)) {
            return;
        }
        unlink($this->archivePath);
    }

    public function getUrl()
    {
        return $this->wiki->config['base_url'] . $this->wiki->tag;
    }

    private function genArchivePath()
    {
        $this->archivePath = tempnam('', 'export2markdown_');
        return $this->archivePath;
    }
}
