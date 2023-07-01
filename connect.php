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
        <link rel="icon" href="Favicon/favicon6.png">
    <title>Обратная связь</title>
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
            <h1>Остались вопросы?</h1>
            <h1>Мы ответим на них.</h1>
          </div>
         <form method="POST" action="connectreg.php" name="signup-form">
           <div class="form_1">
             <div><label for="inputText2">Введите имя</label></div>
              <input type="text2" name="name" id="inputText2" pattern="[А-я-0-9]+" placeholder = "Имя" required/>
              <div><label for="inputText2">Введите номер телефона</label></div>
              <input type="text2" name="phone" placeholder = "phone" required />
              <div class="check_1">
              <input class="check_3"type="checkbox" id="scales" name="scales" checked>
            <!-- </div> -->
              <!-- <div class="check_1"> -->
              <label class="check_4" for="scales">Согласие на обработку персональных данных</label></div>
               
              <button class="btn-group_23" type="submit" name="register" value="register">Получить консультацию </button>
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