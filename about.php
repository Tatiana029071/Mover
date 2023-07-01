<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="CSS/style.css">
        <link rel="icon" href="Favicon/favicon4.png">
    <title>О нас</title>
</head>
<body id="pr">
 <?php
   require("header.php");
 ?>
 <!-- контент -->
 <section class="promo">
		<div class="container">
      <div class="zagolovok">
        <h1>О нас</h1>
      </div>
			<div class="promo-inner">
      <div class="img_77">
              <img class="img_7" src="img/7.jpg" alt="Автоэлектрика" style="width: 600px; height:500px"> 
            </div>
				<div class="about">
          <p> Наша компания оказывает качественные услуги и продает надежные детали </p>
          <p> уже более 10 лет.</p>
          <div class="ab1">
           <p> По сотоянию на январь 2022 на территории России открыто 3 сетевых магазина - в Москве, Ростове-на-Дону и Омске. </p> 
           <p> Мы занимаем лидирующие позиции по продаже запасных частей. </p>
         </div>
          <p> Наши покупатели получают подходящие запчасти вовремя и по выгодным ценам.</p> 
          <p> А крупные поставщики, небольшие магазины и СТО находят своих клиентов. </p>
          <p> Мы делаем покупки и продажи выгодными и надежными. 
          <p> Контролируем качество, гарантируем оплату и возвраты в соответствии с законом.</p>
          <div >
            <h2> Ваша безопасность на дорогах - в нашем приоритете.</h2>  
              
          </div>
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
