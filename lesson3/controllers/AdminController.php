<?php
require __DIR__.'/AbsctractController.php';
require __DIR__.'/../models/NewsArticle.php';

class AdminController
    extends AbscractController
{


             protected function getTemplatePath()
                     {
                         return __DIR__.'/../view/';
                     }


               public function actionAddNews()
                     {


                    $short = new NewsArticle();
                         $shortDisc = $short->postValue(short);


                     $long = new NewsArticle();
                         $longNew = $long->postValue(long);


                    $newModel = new NewsArticle();


                     $newModel->dbExec($shortDisc, $longNew);


                    }

}
header('Location:/news');