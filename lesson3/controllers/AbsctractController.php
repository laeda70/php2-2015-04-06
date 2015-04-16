<?php

require __DIR__.'/../classes/View.php';
abstract class AbscractController

{
    public $view;

    public  function __construct(){

        $this->view = new View();
    }


} 