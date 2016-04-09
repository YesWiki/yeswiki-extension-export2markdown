<?php
namespace Export2Markdown;

class ViewMarkdown extends View
{
    public function show()
    {
        print($this->model->curPage());
    }
}
