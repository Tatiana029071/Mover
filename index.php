<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="CSS/style.css">
        <link rel="icon" href="Favicon/favicon1.png">
    <title>Главная страница</title>
</head>
<body id="ind">
<?php
require("header.php");
?>
 <!-- контент -->
 <section class="promo">
   <div class="container">
      <div class="promo-inner">
    

        <h1 class="text"> Мы предлагаем качественные и надежные комплектующие</h1>
         
        
        <h1 class="text">Нам доверяют на дорогах</h1>  
       <a href="connect.php">
       <button class="btn-group">  Оставить заявку </button> </a>
        <h3 style="padding: 90px 10px">
         <p class="text_p"> <i class="fa fa-check-square-o" aria-hidden="true"></i> Гарантия на ремонт в течение 30 дней</p>  
          <p class="text_p"><i class="fa fa-check-square-o" aria-hidden="true"></i>  Контроль качества выполненных работ </p>
          <p class="text_p"> <i class="fa fa-check-square-o" aria-hidden="true"></i> Квалифицированные специалисты </p>
          <p class="text_p"> <i class="fa fa-check-square-o" aria-hidden="true"></i> Качественные и надежные комплектующие </p>
        </h3>
</div>
      </div>
   </div>
 </section>
 <?php
	require("footer.php");
	?>
</body>
</html>