<!---------- Представление всех новостей ----->
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Новости</title>
</head>
<body>
        <ul>

            <?foreach ($news as $new):?>

            <li><img src = "/img/<? echo $new['img']?>"><a href = "../view/pagenews.php?id=<?php echo $new['id'];?>"><?echo $new['short_disc']?></a></li>
            <?endforeach;?>
        </ul>
            <?include ('form.php')?>
</body>
</html>