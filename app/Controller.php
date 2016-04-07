<?php
namespace Export2Markdown;

use League\HTMLToMarkdown\HtmlConverter;

class Controller extends HtmlConverter
{
    public function run($wiki)
    {
        $allPages = $wiki->LoadAllPages();
        $pageFactory = new PageFactory();
        foreach ($allPages as $pageData) {
            $pageFactory->make($pageData)->write('tools/export2markdown/tmp');
        }
    }
}
