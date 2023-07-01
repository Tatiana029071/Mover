<?php
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
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="CSS/style.css">
       
     <title>Шапка сайта</title> 
     <?php
      //     подключение к базе данных 
   require("connections.php");
      $select_rows = mysqli_query($linkdb, "SELECT * FROM `cart`");
      $row_count = mysqli_num_rows($select_rows);

      ?>
  </head> 
<!-- верхняя панель -->
<header> 
 <div class="container">
        
 
     <div class="inner inner__nav">
     <div class="logo_block">
     <a href="index.php"><h1 class="logo"> M <i class="fa fa-cog" aria-hidden="true"></i> VER</h1>
     </a>
         </div>
         <div class="menu-burger__header burger">
            <span></span>
         </div>
         <nav class="navbar">  
             <div class="topnav-right"> 
                 <p><a href="register.php"><i class="fa fa-address-book-o" aria-hidden="true"></i> Регистрация</a></p>
                 <a href="authorization1.php" ><i class="fa fa-user-o" aria-hidden="true"> </i> Личный кабинет</a>  

     

                 <p><a href="cart.php" class="cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Корзина <span> <?php echo $row_count; ?></span> </a> </p>  
             </div>

              <div class="topnav-center">
                 <a href="connect.php"><i class="fa fa-phone" aria-hidden="true"></i> Заказать обратный звонок</a>
                    <p> <a href="TO.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Записаться на ТО</a> </p>
                    <p> <a href="contacts.php"><i class="fa fa-mobile" aria-hidden="true"></i>  Свяжитесь с нами: <?php echo $res["phone"]?></p></a> </p>
               </div>

         </nav>
         <nav class="navbar1"> 
                <a href="index.php">Главная</a>
                <a href="product.php">Товары</a>
                <a href="product2.php">Услуги</a>
                <a href="about.php">О компании</a>
                <a href="contacts.php">Как связаться?</a>
                <!-- <a href="authorizationCONF.php">Профиль 
                </a> -->

                <div class="topnav-right1"> 
                  <form class="example" action="action_page.php">
                
                  </form>
                </div>
           </nav>
      </div>
 </div> 
 <script>
        document.querySelector('.burger').addEventListener('click', function () {
        
        document.querySelector('.inner__nav').classList.toggle('open');

    });
</script> 

</header>
