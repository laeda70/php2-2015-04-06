<?php
/**
 * Created by PhpStorm.
 * User: folder
 * Date: 21.04.2015
 * Time: 13:49
 */
 require __DIR__.'/../classes/Model.php';
class NewsArticle
    extends Model
{
    protected static $table = 'news';
    public $short_disc;
    public $full_name;
    public $id;
    


} 