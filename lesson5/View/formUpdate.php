
<form enctype ="multipart/form-data" action = "/Admin/Save" method = "post">


         <input type ="hidden" name = "id" value = <?= $_GET['id']?> >
       <input type ="text" name = "short" value = "" >
        <input type ="textarea" name = "long" value = "" >

      <input type ="submit" value = "Редактировать новость">

</form>
<form enctype ="multipart/form-data" action = "/Admin/Delete" method = "post">


    <input type ="hidden" name = "id" value = <?= $_GET['id']?> >


    <input type ="submit" value = "Удалить новость">

</form>