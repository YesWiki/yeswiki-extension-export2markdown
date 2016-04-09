<?php
namespace Export2Markdown;

use League\HTMLToMarkdown\HtmlConverter;

class Controller extends HtmlConverter
{
    public function __construct($wiki)
    {
        $this->wiki = $wiki;
    }

    public function run()
    {
        $url = $this->wiki->config['base_url'] . $this->wiki->tag;
        $view = new ViewButton();
        $view->show($url);
    }
}
