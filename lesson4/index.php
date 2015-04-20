<?php

require __DIR__.'/config/url.php';

$ctrlName = ucfirst($ctrl) . 'Controller';
$actionName = 'action'. $action;

require __DIR__.'/Controllers/' .$ctrlName. '.php';
$test = new $ctrlName();
$test->$actionName();







