<?php
require __DIR__.'/../Models/NewsArticle.php';


class AdminController{

    public function actionInsert(){


        $article = new NewsArticle();

        $article->short_disc = $_POST['short'];
        $article->full_name = $_POST['long'];
        $article->id = $_POST['id'];

        $article->insert( );



    }

    public function actionUpdate()
    {
        $id =$_POST['id'];

        $article = NewsArticle::findOne($id);
        $article->short_disc =$_POST['short'];
        $article->full_name = $_POST['long'];

        $article->update();

    }
    public function actionDelete()
    {
        $id = $_POST['id'];

        $article = NewsArticle::findOne($id);
        $article->delete();

    }

    public function actionSave()
    {
        $id =$_POST['id'];
        $save = new AdminController();

        if (empty($id)){
            $save->actionInsert();
        }

        else {
            $save->actionUpdate();
        }
    }

}
header('Location:/news');