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

    public function write($path)
    {
        if (file_put_contents(
            $path . '/' . $this->filename,
            $this->markdown
        ) === false) {
            return false;
        }
        return true;
    }
}
