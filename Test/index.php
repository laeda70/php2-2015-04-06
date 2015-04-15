<?php

$ctrl = !empty($_GET['ctrl']) ? $_GET['ctrl'] :'news';
$ctrlClassName = ucfirst($ctrl).'Controller';

$method = !empty($_GET['method']) ? $_GET['method'] :'All';
$methodName = 'action'. $method;


echo $id;
echo $methodName;


echo $ctrlClassName;

require __DIR__.'/controllers/'.$ctrlClassName.'.php';
$controller = new $ctrlClassName();
$controller->$methodName($id);

//$controller ->method($id);









require __DIR__.'/controllers/AdminController.php';

$controller2 = new AdminController();
$controller2->actionAddNews();

require __DIR__.'/view/form.php';