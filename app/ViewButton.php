<?php
namespace Export2Markdown;

class ViewButton extends View
{
    public function show()
    {
        print(
            "<a href='$data&export2markdown' class='btn btn-primary'>"
            . _t('E2M_EXPORT')
            . '</a>')
        ;
    }
}
