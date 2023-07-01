<?php
$name = $_POST['name'];
$price = $_POST['price'];
$categories = $_POST['categories'];
$img = $_POST['img'];
echo $name;
//     подключение к базе данных 
 require("../connections.php");

 //    Вставляем данные, подставляя их в запрос 
$sql = mysqli_query($linkdb, "INSERT INTO `product`(`name`, `price`, `categories`, `img`) VALUES ('$name', '$price', '$categories', '$img')");

//Если вставка прошла успешно
if ($sql) {
  echo '<a href="adminpanel.php"><p>Данные успешно добавлены в таблицу.</p>';
} else {
  echo '<p>Произошла ошибка: ' . mysqli_error($linkdb) . '</p>';
}
?>
