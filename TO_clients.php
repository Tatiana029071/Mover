<?php
session_start();  
 if (isset($_POST['name']) && isset($_POST['model']) && isset($_POST['year']) && isset($_POST['date']) && isset($_POST['phone'])){
// Переменные с формы
$name = $_POST['name'];
$model = $_POST['model'];
$year = $_POST['year'];
$date = $_POST['date'];
$phone = $_POST['phone'];
// session_start();
//     подключение к базе данных 
require("connections.php");
//    Вставляем данные, подставляя их в запрос hf,jxfz date

$sql = mysqli_query($linkdb, "INSERT INTO `to_clients`(`name`, `model`, `year`,`date`, `phone`) VALUES ('$name', '$model', '$year', '$date', '$phone')");
   //Если вставка прошла успешно
//    if ($sql) {
//      echo '<p>Данные успешно добавлены в таблицу.</p>';
//    } else {
//      echo '<p>Произошла ошибка: ' . mysqli_error($linkdb) . '</p>';
//    }
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="CSS/style.css">
        <link rel="icon" href="Favicon/favicon.png"> 
    <title>Обратная связь</title>
</head>
<body id="pr">
 <!-- верхняя панель -->
 <?php
   require("header.php");
  ?>
 <!-- контент -->
	<section class="promo">
		<div class="container">
			<div class="promo-inner">
			 <div class="conect">
				 <div class="connect_textSV">
           <div class="formSV">
              <form method="POST" action="index.php" name="signup-form">
                <h1>До связи! 
                <p> Для уточнения деталий, с Вами свяжутся наши специалисты.<p>
                </h1>
                <button class="btn-group_1" type="submit" name="register" value="register"> Вернуться на главную страницу</button>
              </form>
            </div>
         </div>
        </div>
      </div>
   </div>	
  </section>	
	<!-- подвал -->
  <?php
   require("footer.php");
  ?>
    </footer>
</body>
</html>