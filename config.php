<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="CSS/style.css">
        <link rel="icon" href="Favicon/Lk.png">
    <title>Регистрация пользователя</title>
</head>
<body id="pr">
	<!-- верхняя панель-->
  <?php
	 require("header.php");
 ?>
   <!-- контент -->

	<section class="promo">
		<div class="container">
			<div class="promo-inner">
				<div class="conect">
					<div class="connect_text">
            <!-- <h1>Остались вопросы?</h1>
            <h1>Мы ответим на них.</h1> -->
          </div>
              <div class="form">

    <form method="POST" action="authorization.php" name="signup-form">
    <h1>Вы зарегистрированы!</h1>
    <button class="btn-group_19" type="submit" name="register" value="register"> Войти</button>
    </form>

          </div>	
  </section>	
	<!-- подвал-->
  <?php
	 require("footer.php");
   ?>
</body>
</html>

<?php 
 if (isset($_POST['username'])  && isset($_POST['password'])&& isset($_POST['email'])){
// Переменные с формы
$username = $_POST['username'];
$password1 = $_POST['password'];
$email = $_POST['email'];
 
 //     подключение к базе данных 
 require("connections.php");
 
 //    Вставляем данные, подставляя их в запрос 
 $passwordHash = hash('sha256', md5($password1));
$sql = mysqli_query($linkdb, "INSERT INTO `users`(`username`, `password`, `email`) VALUES ('$username', '$passwordHash', '$email')");

//Если вставка прошла успешно
// if ($sql) {
//   echo '<a href="registration.php"><p>Данные успешно добавлены в таблицу.</p>';
// } else {
//   echo '<p>Произошла ошибка: ' . mysqli_error($linkdb) . '</p>';
// }
}

?>  

