<?php
require 'view/model.php';

$news = dbQuery('

        SELECT * FROM news
');

require './view/index.php';