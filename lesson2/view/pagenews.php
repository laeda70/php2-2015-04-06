<!-------- Представление каждой новости------>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Новости</title>
</head>
<body>
<p><?



    $id = $_GET[id];

    require __DIR__ . '/../Controllers/news.php';

    require __DIR__.'/../Object/dateAdd.php';

    $article->text = $sql[0]['fullname'];
    $article->img = $sql2[0]['img'];


   ?>
    <img src="../img/<? $article->viewImg()?>">
                     <? $article->viewText();

 require __DIR__.'/formupdate.php';
    ?></p>



</body>
</html>







