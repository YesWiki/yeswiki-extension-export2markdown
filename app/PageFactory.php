<?php
namespace Export2Markdown;

use League\HTMLToMarkdown\HtmlConverter;

class PageFactory extends HtmlConverter
{
    public function __construct()
    {
        parent::__construct();
        $this->getConfig()->setOption('strip_tags', true);
    }

    public function make($data)
    {
        return new Page(
            $this->genFileName($data['tag'], $data['time']),
            $this->convert($data['body'])
        );
    }

    private function genFileName($tag, $date)
    {
        return $tag . '-' . $date . '.md';
    }
}
