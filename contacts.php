<?php
session_start();
//Подкючение к бд
$user = "root";
$password = "";
$host = "localhost";
$db = "clients";
$dbh = 'mysql:host='.$host.';dbname='.$db.';charset=utf8';
$pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);

//Подготовка запроса
$sql = $pdo->prepare("SELECT * FROM contact");
$sql->execute();
$res = $sql->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="CSS/style.css">
        <link rel="icon" href="Favicon/favicon6.png">
    <title>Наши контакты</title>
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
				<div class="conect55">
					<div class="connect_text55">
                    <h2>Контакты:</h2>
                    <div class="text12">
                    <p>Телефон: <?php echo $res["phone"]?></p>
                    <p>Адрес: <?php echo $res["adress"]?> </p>
                   </div>
                        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A7d538a83a4e37224a49c9363570aaed4e5d0f8494becf432404e34dcee59c6c9&amp;source=constructor" width="520" height="540" frameborder="0"></iframe>
                    <h2>Мы работаем: Ежедневно с 10:00-19:00</h2>  
                </div>
            </div>
        
        <form method="POST" action="connectreg.php" name="signup-form">
          <div class="Tekst10"> <h1>Напишите нам </h1> </div>
           <div class="form_10">
             <div><label class="text34" for="inputText333">Введите имя</label></div>
              <input class="text33" type="text2" name="name" id="inputText2" pattern="[А-я-0-9]+" placeholder = "Имя" required/>
              <div><label class="text34" for="inputText33">Введите номер телефона</label></div>
              <input class="text33" type="text33" name="phone" placeholder = "phone" required />
              <div class="check">
              <input type="checkbox" id="scales" name="scales" checked>
            <!-- </div> -->
              <!-- <div class="check_1"> -->
              <label for="scales">Согласие на обработку персональных данных</label></div>
               
              <button class="btn-group_24" type="submit" name="register" value="register">Получить консультацию </button>
            </div>
         </form>
			</div>
		</div>	
        </div>
 </section>	
	<!-- подвал -->
  <?php
   require("footer.php");
  ?>
</body>
</html>

