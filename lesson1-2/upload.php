<?php
include('model/model.php');


$name = 'image';
if (!empty($_FILES)){
    if (isset($_FILES[$name])){
        //var_dump($_FILES);exit;
        if (0==$_FILES[$name]['error']){


            $newFileName = $_FILES[$name]['name'];
            $newFilePath = __DIR__.'/img/'.$newFileName;


            move_uploaded_file($_FILES[$name]['tmp_name'],
                $newFilePath

            );

        }

    }
}

$short = 'short';
$long = 'long';
    if(!empty($_POST)){
        if(isset($_POST[$short])) {
            if(isset($_POST[$long])) {
               // var_dump($_POST);exit;
                $shortDisc = $_POST[$short];
                $longNew = $_POST[$long];

            }
        }
    }

//if (($newFileName!=null) and ($short!=null) and($long!=null)) {

    dbExec("
                INSERT INTO news(short_disc,fullname,img)
                 VALUES ('$shortDisc','$longNew','$newFileName')

            ");

//}


header('Location: /Controller/index.php');