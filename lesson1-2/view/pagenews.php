<!-------- Представление каждой новости------>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Новости</title>
</head>
<body>
<p><?
    require '../Controller/news.php';
    echo $sql[0]['fullname'];

    ?></p>

</body>
</html>







