<?php


abstract class AbstractController

{
    public $view;
    public function __construct()

    {
      $this->view = new View(__DIR__.'/../View/');
    }


} 