<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>



     <?php foreach ($items as $item):?>



           <article>
             <h1><a href = "?id=<?php echo $item->id;?>&crtl=news&method=One"><? echo $item->short_disc?></a></h1>
            <div><?echo $item->fullname?></div>
            </article>
    <?php endforeach; ?>

</body>
</html>