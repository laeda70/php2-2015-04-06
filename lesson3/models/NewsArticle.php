<?php
require __DIR__.'/Article.php';
class NewsArticle
    extends Article

{
    protected function getTable()
    {
     return 'news';
    }

    public function postValue($value)
    {

           return ($val = $_POST[$value]);

    }






}