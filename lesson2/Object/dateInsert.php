<?php
$dateInsert = new DataBase('localhost','root','','test');
$dateInsert->dataBaseConnect();
$dateInsert->dataBaseInsert("
                UPDATE news

                SET
                fullname = '$longNew',
                short_disc = '$shortDisc',
                img = '$newFileName'


                WHERE id = '$idNew'

            ");
header('Location:/index.php');