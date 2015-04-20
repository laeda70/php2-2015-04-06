<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?php foreach ($items as $item):?>



    <article>
        <h1><a href = "/news/One?id=<?php echo $item->id;?>"><? echo $item->short_disc?></a></h1>
        <div><?echo $item->fullname?></div>
    </article>
<?php endforeach; ?>

<??>

<?REQUIRE __DIR__.'/form.php';?>

</body>

<copyright></copyright>
</html>