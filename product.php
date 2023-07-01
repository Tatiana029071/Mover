<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="CSS/style.css">
    <link rel="icon" href="Favicon/favicon5.png">
	<title>Товары</title>
</head>
<body id="pr">
  
 <?php
   require("header.php");
 ?>
  <!-- контент -->
  <section class="promo">
		<div class="container">
			<div class="zagolovok">
				<h2>Товары</h2></div>
			<div class="promo-inner">

				<div class="block_1">
					<h2>Запчасти</h2>
					<div class="st1">
			      <p> <a href="">  Поиск по VIN </a></p>
                  <p> <a href="">  Каталог </a></p>
				    </div>
                  <img class="img1" src="img/1.png" alt="Поиск">
             </div>
          <div class="block_2">
					<h2>Автохимия</h2>
					<div class="st2">
			     <p><a href="oil.php"> Автомобильные масла </a></p> 
			     <p><a href="">Автокосметика </a></p>
			     <p><a href=""> Очистители</a></p>
			     <P> <a href=""> Размораживатели</a> </P>
			     <P><a href="">Технические жидкости ждя автомобилей</a></P>
                   </div>
                  <img  class="img2" src="img/2.png" alt="Автохимия">
          </div>
            <div class="block_3">
					<h2>Автоэлектрика</h2>
			     <div class="st3"> 
                 <p><a href="#"> Зарядные устройства</a></p> 
			     <p><a href="">Мультимедийные системы</a></p>
			     <p><a href=""> Навигаторы</a></p>
			     <P><a href=""> Автомобильные динамики</a> </P>
           </div>
                 <img class="img3" src="img/3.png" alt="Автоэлектрика">          
             </div>
			</div>
		</div>		
	</section>	
	<?php
   require("footer.php");
   ?>
</body>
</html>