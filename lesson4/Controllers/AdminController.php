<?php
require __DIR__.'/../Models/NewsArticle.php';

class AdminController{

    public function actionAddNews(){

        $short = new NewsArticle();
        $short_disc= $short->postValue(short);
        $fullname = $short->postValue(long);

        $newModel = new NewsArticle();
        $newModel->dbExec($short_disc, $fullname);
    }

}
header('Location:/news');