<?/* Контроллер 2  */

require '../model/model.php';
$news = dbQuery('

        SELECT * FROM news
');

$id = $_GET[id];

$sql = dbQuery("SELECT fullname FROM news WHERE id = $id");

echo $sql[0]['fullname'];

