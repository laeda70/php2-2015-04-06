<?php
class Article{
    public $title;
    public $text;
    public $img;

   public function viewTitle(){
       echo $this->title;

   }

    public function viewText(){
        echo $this->text;
    }


    public function viewImg(){
        echo $this->img;
    }



}