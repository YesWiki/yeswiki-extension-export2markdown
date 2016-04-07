<?php
namespace Export2Markdown;

use League\HTMLToMarkdown\HtmlConverter;

class Controller extends HtmlConverter
{
    public function run($wiki)
    {
        $allPages = $wiki->LoadAllPages();
        $pages = array();
        $pageFactory = new PageFactory();
        foreach ($allPages as $pageData) {
            $pages[] = $pageFactory->make($pageData);
        }
    }
}
