<?php
require __DIR__.'/../models/NewsArticle.php';
require __DIR__.'/AbsctractController.php';

class NewsController
    extends AbscractController



{


        public function actionAll()
        {
            $newModel = new NewsArticle();
            $items = $newModel->findAll();
            $this->view->render('pageNews',['items'=>$items]);

        }


    /**
     * @param $id
     */

    public function actionOne()

         {
        $id = $_GET[id];
        $newModel = new NewsArticle();
        $items = $newModel->findOne($id);
        $this->view->render('pageOneNews',['items'=>$items]);

         }



} 