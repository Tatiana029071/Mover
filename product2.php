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
	<title>Услуги</title>
</head>
<body id="pr">
 <?php
 require("header.php");
 ?>
	<section class="promo">
		<div class="container">
      <div class="zagolovok">
        <h1>Услуги</h1></div>
			<div class="promo-inner">
				<div class="block_1">
					<h2> Диагностика</h2>
					<div class="st1">
			      <p> <a href="">  Комплексная диагностика </a></p>
             <p> <a href=""> Перед покупкой  </a></p>
                   <p> <a href=""> Компьтерная </a></p>
                   <p> <a href="">  Двигатель</a></p>
                   <p> <a href=""> Ходовая часть </a></p>
                    <p> <a href="">  Автоэлектрика</a></p>
                    <p> <a href="">Тормозная система </a></p>
                    <p> <a href="">Рулевое управление</a></p>

				    </div>
                  <img class=".img_4" src="img/4 (1).png" alt="Диагностика">
             </div>
          
          <div class="block_2">
					<h2>Ремонт</h2>
					<div class="st2">
			     <p><a href="#"> Двигатель </a></p> 
			     <p><a href="">Ходовая часть</a></p>
			     <p><a href=""> Тормозная система</a></p>
			     <P> <a href="">Трансмиссия </a> </P>
          </div>
          <img  class="img2_2" src="img/4 (2).png" alt="Ремонт">
          </div>

            <div class="block_3">
					<h2>Техническое обслуживание</h2>
			     <div class="st3"> 
                 <p><a href="#"> По пробегу</a></p> 
			     <p><a href="">Замена тормозной жидкости</a></p>
			     <p><a href="">Замена жидкости ГУР</a></p>
			     <P><a href=""> Замена масла в АКПП</a> </P>
           <P><a href=""> Замена масла в трансмисси</a> </P>
           </div>
                 <img class="img2_3" src="img/4 (3).png" alt="ТО">          
             </div>
			</div>
		</div>	
	</section>	
	<?php
 require("footer.php");
 ?>
</body>
</html>