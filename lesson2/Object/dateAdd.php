<?php
$dateAdd = new DataBase('localhost','root','','test');
$dateAdd->dataBaseConnect();
$sql = $dateAdd->dataBaseAllRow("
                SELECT fullname FROM news WHERE id = ".$id."
                    ");

$sql2 = $dateAdd->dataBaseAllRow("
                SELECT img FROM news WHERE id =". $id."");
