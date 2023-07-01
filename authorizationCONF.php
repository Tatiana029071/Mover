<?php
session_start();  
// var_dump($_SESSION);
 if (isset($_POST['password'])&& isset($_POST['email'])){
  // Переменные из формы
  $password1 = $_POST['password'];
  $email = $_POST['email'];
//     подключение к базе данных 
  require("connections.php");
 }
//хэшируем пароль
$passwordHash = hash('sha256', md5($password1));
 $query = 'SELECT*FROM users WHERE email="'.$email.'"';

$result = mysqli_query($linkdb, $query); //ответ базы запишем в  $result. 
$user = mysqli_fetch_assoc($result); //преобразуем ответ из БД в массив PHP
// echo print_r($user,1);
//Если база данных вернула не пустой ответ - значит пара логин-пароль правильная
if (!empty($user)) {
  
//Пишем в сессию информацию о том, что мы авторизовались:
$_SESSION['auth'] = true; 
// echo 'Добро пожаловать';
//Пишем в сессию логин и id пользователя (их мы берем из переменной $user):
$_SESSION['emil'] = $user['email']; 
$_SESSION['username'] = $user['username'];   
// echo print_r($_SESSION,1);


} 
else {
  // Пользователь неверно ввел логин или пароль, выполним какой-то код.
  header('location:authorization1.php');
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
        <link rel="icon" href="Favicon/Lk.png">
    <title>Личный кабинет пользователя</title>
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
          <div class="form">
           <h2>
              <?php 
                echo 'Добро пожаловать, '.$_SESSION['username'].'!';
              ?>
            </h2>
            <h3><div class="lk">
              <p> <i class="fa fa-truck" aria-hidden="true"></i> Отследить заказ </p> 
              <p><a href="cart.php"> <i class="fa fa-shopping-basket" aria-hidden="true"></i>Моя корзина </a> </p>  
              <p>  <i class="fa fa-history" aria-hidden="true"></i> История заказов </p> 
           </div> </h3>

            <button class="btn-group_5" type="submit" name="register" value="register"><a href ="authorization.php">Выйти из системы </a> </button>  
          </div>
        </div>
     </div>
   </div>	
  </section>	
	<!-- подвал-->
  <?php
	 require("footer.php");
   
	?>
</body>
</html>

