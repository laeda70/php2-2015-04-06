<!--------Контроллер ---->
<?php
require '../model/model.php';


$news = dbQuery('

        SELECT * FROM news
');

require '../view/index.php';

