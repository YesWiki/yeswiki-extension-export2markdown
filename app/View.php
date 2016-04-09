<?php
namespace Export2Markdown;

abstract class View
{
    public function __construct($model)
    {
        $this->model = $model;
    }

    abstract public function show();
}
