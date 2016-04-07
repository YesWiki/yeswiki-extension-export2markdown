<?php
namespace Export2Markdown;

use League\HTMLToMarkdown\HtmlConverter;

class Page
{

    public function __construct($filename, $markdown)
    {
        $this->markdown = $markdown;
        $this->filename = $filename;
    }
}
