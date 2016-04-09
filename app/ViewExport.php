<?php
namespace Export2Markdown;

class ViewExport extends View
{
    public function show()
    {
        $file = $this->model->makeArchive();
        header('Content-type: application/zip');
        header('Content-Disposition: inline; filename="export2markdown.zip"');
        header('Content-Length: ' . filesize($file));
        readfile($file);
        $this->model->deleteArchive();
    }
}
