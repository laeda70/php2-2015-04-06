<?php
$dateBase2 = new DataBase('localhost','root','','test');
$dateBase2->dataBaseConnect();
$news = $dateBase2->dataBaseAllRow("SELECT * FROM news");