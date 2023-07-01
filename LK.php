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
                echo 'Вы вошли как пользователь   '.$_SESSION['username'].'';
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