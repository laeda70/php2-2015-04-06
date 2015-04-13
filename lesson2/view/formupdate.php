<form enctype ="multipart/form-data" action = "../Controllers/redact.php" method = "post">

    <ul>
        <li> <input type ="hidden" name = "id" value = "<?=$_GET[id];?>" ></li>
        <li> <input type ="text" name = "short" ></li>
        <li > <input type ="textarea" name = "long" ></li>
        <li> <input type ="file" name = "image"></li>
        <li> <input type ="submit" value = "редактировать"></li>
        <ul>
</form>