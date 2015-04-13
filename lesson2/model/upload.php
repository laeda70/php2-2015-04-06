<?php
/* ------------------------------Картинка, к добавляемой новости с главной страницы сайта----------------------------------------  */
$name = 'image';
if (!empty($_FILES))
{
    if (isset($_FILES[$name]))
    {
        if (0==$_FILES[$name]['error'])
        {


            $newFileName = $_FILES[$name]['name'];
            $newFilePath = __DIR__.'/../img/'.$newFileName;


            move_uploaded_file($_FILES[$name]['tmp_name'],
                $newFilePath
            );

        }

    }
}

/* ---------------------------- Заголовок и текст добавляемой новости через форму пользователем -----------------------------
        */
$id = 'id';// id страницы
$short = 'short';// Заголовок новости
$long = 'long';//   Полный текст новости
    if(!empty($_POST))
    {
        if(isset($_POST[$short]))
        {
            if(isset($_POST[$long]))

            {
                $shortDisc = $_POST[$short];
                $longNew = $_POST[$long];
                $idNew = $_POST[$id];

            }
        }
    }

