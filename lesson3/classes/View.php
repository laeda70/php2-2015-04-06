<?php

 class View

 {
        public $items;

     public function getTemplatePath()
     {
         return __DIR__.'/../view/';
     }


     public  function render($template, $data)

     {
         extract($data);
         require $this->getTemplatePath().'/'.$template.'.php';

     }



 }