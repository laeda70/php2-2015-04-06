<?php
$dateAddNew = new DataBase('localhost','root','','test');
$dateAddNew->dataBaseConnect();

$dateAddNew->dataBaseInsert("
               INSERT INTO news(short_disc,fullname,img)
                VALUES ('$shortDisc','$longNew','$newFileName')

           ");
header('Location:/index.php');