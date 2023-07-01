<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="CSS/style.css">
        <link rel="icon" href="Favicon/favicon.png"> 
    <title>Записаться на ТО</title>
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
					<div class="connect_text">
            <h1>Для записи заполните форму:</h1>
          </div>
         <form method="POST" action="TO_clients.php" name="signup-form">
           <div class="form">
             <div><label for="inputText2">Как вас зовут?</label></div>
              <input type="text2" name="name" id="inputText2" pattern="[А-я-0-9]+" placeholder = "Сергей" required/>
              <div><label for="inputText2">Укажите марку машины</label></div>
               <input type="text2" name="model" id="inputText2"  placeholder = "KIA Seed" required/>
              <div><label for="inputText2">Укажите год выпуска машины и пробег</label></div>
               <input type="text2" name="year" id="inputText2"  placeholder = "2008г, 123км" required/>
              <div><label for="inputText2">Укажите предпочитаемую дату записи</label></div>
              <input type="text2" name="date" placeholder = "13.08.2023" required />
              <div><label for="inputText2">Как с Вами связаться?</label></div>
              <input type="text2" name="phone" placeholder = "89889929124" required />
              <button class="btn-group_1" type="submit" name="register" value="register"> Отправить </button>
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