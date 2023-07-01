<?php
session_start();
// var_dump($_SESSION);
if (isset($_POST['hidden_name'])&& isset($_POST['hidden_price']) && isset($_POST['hidden_id'])){
$name = $_POST['hidden_name'];
$price= $_POST['hidden_price'];
$id = $_POST['hidden_id'];
echo $name;
//     подключение к базе данных 
 require("../connections.php");
}
 //    Вставляем данные, подставляя их в запрос 
 $query = "DELETE FROM product WHERE id='$id'";
 $newRow = mySqli_query($linkdb, $query);
 if ($query) {
   echo '<a href="adminpanel.php"><p>Данные успешно удалены.</p>';
 } else {
   echo '<p>Произошла ошибка: ' . mysqli_error($linkdb) . '</p>';
 }

?>
