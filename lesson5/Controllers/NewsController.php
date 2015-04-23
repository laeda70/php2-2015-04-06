<?php

require __DIR__.'/../Models/NewsArticle.php';
require __DIR__.'/AbstractController.php';
require __DIR__.'/../classes/View.php';

class NewsController
    extends AbstractController

{
        public function actionAll()
        {


            $this->view->items = NewsArticle::findAll();
            $this->view->copyRight('pageNews');
        }

    /**
     *
     */
    public function actionOne()

    {
        $id = $_GET['id'];


        $this->view->items = NewsArticle::findOne($id);
        $this->view->copyRight('pageOneNews');
    }




}