<!---------- Представление всех новостей ----->
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Новости</title>
</head>
<body>
        <ul>






            <?
                require __DIR__.'/../Object/dateBase.php';

                foreach ($news as $new):

                $article -> title = $new['short_disc'];
                $article -> img = $new['img'];

            ?>

            <li><img src = "/img/<? $article->viewImg() ?>"><a href = "../view/pagenews.php?id=<?php echo $new['id'];?>"><?$article ->viewTitle() ?></a></li>
            <?endforeach;?>
        </ul>
            <?include 'form.php'?>
</body>
</html>