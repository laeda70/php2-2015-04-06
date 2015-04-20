<?php

require __DIR__.'/../Models/NewsArticle.php';
require __DIR__.'/AbstractController.php';
require __DIR__.'/../classes/View.php';

class NewsController
    extends AbstractController

{
        public function actionAll()
        {
            $news = new NewsArticle();

            $this->view->items = $news->findAll();
            $this->view->render('pageNews');
        }

    /**
     *
     */
    public function actionOne()

    {
        $id = $_GET[id];
        $news = new NewsArticle();

        $this->view->items = $news->findOne($id);
        $this->view->render('pageOneNews');
    }




}