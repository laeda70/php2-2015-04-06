<?php
require __DIR__.'/../models/NewsArticle.php';
require __DIR__.'/AbsctractController.php';

class NewsController
    extends AbscractController

{

    protected function getTemplatePath()
    {
        return __DIR__.'/../view/';
    }


        public function actionAll()
        {
            $newModel = new NewsArticle();
            $items = $newModel->findAll();
            $this->render('pageNews',['items'=>$items]);

        }



          public function actionOne($id)

         {
        $newModel = new NewsArticle();
        $items = $newModel->findOne($id);
        $this->render('pageOneNews',['items'=>$items]);

         }



} 