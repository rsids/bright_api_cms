<?php

header('Content-Type: text/html; charset=utf-8');

date_default_timezone_set('Europe/Amsterdam');

$configPath = __DIR__ . '/../site/config/Constants.php';
if(file_exists($configPath)) {
    require_once $configPath;
}

require_once $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . '/vendor/autoload.php';
require_once $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . '/vendor/fur/bright/api/amf/index.php';