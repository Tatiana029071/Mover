<?php
session_start();
 // var_dump($_SESSION);
   //     подключение к базе данных 
   require("../connections.php");
 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="icon" href="../Favicon/favicon3.png">
    <title>Панель администрирования</title>
</head>
<body>
<div style = "text-align: center">
    <?php  if (!empty($_SESSION['login'])) :?>
    <?php echo "Здравствуйте,"." ".$_SESSION['login']."!" ; ?>
    <br>
    <a href="../Admin/admin.php">Выйти</a>

<section class="promo">
	<div class="container">
		<div class="promo-inner">
      <div class="form">
        <form action='..//Admin/newart.php' method='post'>
         <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; width: 25%;">
          <h3><a href="udate.php"> Добавление нового товара </a></h3>
          <h3>Добавление нового товара </h3>
          <label for="inputText2">Название товара:</label>
          <input type="text2" name="name" placeholder = "Лукойл" required />
          <br>
          <label for="inputText2">Цена:</label>
          <input type="price" name="price"placeholder = "4000" required />
          <br>
          <label for="inputText2">Категория:</label>    
   <input name="categories" />
   <select id="categories">
   <option value="Synthetic oil">Synthetic oil</option>
   <option value="engine">engine</option>
   <option value="Oil">OIL</option>
   </select>

          <br>
          <label for="inputText2">Ссылка на Изображение:</label>
          <input type="img" name="img"placeholder = "img" required />
          <button class="btn-group_1" type="submit" name="register" value="register">Добавить товар</button>
         </div>
       </form>
    </div>
    <?php endif?>
    </body>
</html>