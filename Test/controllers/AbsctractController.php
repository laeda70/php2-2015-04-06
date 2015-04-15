<?php


abstract class AbscractController

{
     abstract protected function getTemplatePath();

    protected function render($template, $data)

    {
        extract($data);
        require $this->getTemplatePath().'/'.$template.'.php';

    }

} 