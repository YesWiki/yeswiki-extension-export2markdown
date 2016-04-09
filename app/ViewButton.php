<?php
namespace Export2Markdown;

class ViewButton extends View
{
    public function show()
    {
        $url = $this->model->getUrl();
        print(
            "<a href='$url/export2markdown' class='btn btn-primary'>"
            . _t('E2M_EXPORT')
            . '</a>')
        ;
    }
}
