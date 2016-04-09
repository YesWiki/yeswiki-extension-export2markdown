<?php
namespace Export2Markdown;

if (!defined("WIKINI_VERSION")) {
    die("acc&egrave;s direct interdit");
}

$loader = require __DIR__ . '/../vendor/autoload.php';

$controller = new Controller($this);
$controller->run();
