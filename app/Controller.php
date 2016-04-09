<?php
namespace Export2Markdown;

use League\HTMLToMarkdown\HtmlConverter;

class Controller extends HtmlConverter
{
    public function __construct($model)
    {
        $this->model = $model;
    }

    public function action()
    {
        $view = new ViewButton($this->model);
        $view->show();
    }

    public function handler()
    {
        $view = new ViewExport($this->model);
        $view->show();
    }

    public function handlerMd()
    {
        $view = new ViewMarkdown($this->model);
        $view->show();
    }
}
