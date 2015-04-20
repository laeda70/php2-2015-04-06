<?php

class View
{
    protected $path;
    protected $data =[];

    public function __construct($path)
    {
        $this->path = $path;

    }

    public function __set($k,$v)

    {
       $this->data[$k] = $v;

    }

    public function __get($k)
    {
        return $this->data[$k];

    }

    public function render($template)

    {
       extract($this->data);
        ob_start();
        include ($this->path.'/'. $template.'.php');
        $content = ob_get_contents();
        ob_end_clean();

        $copyright = $this->copyRight($content);
        echo $copyright;
    }

    public function copyRight($content)
    {
        $content = str_replace("<copyright>","Max - 2015(c)",$content);
        return $content;

    }

}