<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Новости</title>
</head>
<body>
        <ul>
            <?php foreach($news as $new): ?>
            <li><?echo $new['short_disc'] ?><a href = "new.html"></li>
            <?php endforeach; ?>
        <ul>
</body>
</html>