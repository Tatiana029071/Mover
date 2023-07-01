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
 <?php
   require("header.php");
 ?>
  <!-- контент -->
	<section class="promo">
		<div class="container">
			<div class="promo-inner">
				<div class="conect">
          <div class="formREG">
           <form method="POST" action="config.php" name="signup-form">
             <div class="form-element">
               <label for="inputText2">Введите имя</label>
                <input type="text2" name="username" pattern="[А-я-0-9]+" placeholder = "Имя" required/>
                <label for="inputText2">Введите еmail</label>
                <input type="text2" name="email" placeholder = "email" required />
                <label for="inputText2">Введите пароль</label>
                <input type="password" name="password"placeholder = "password" required />
              </div>
              <button class="btn-group_1" type="submit" name="register" value="register">Зарегистрироваться</button>
           </form>
          </div>
       </div>
      </div>
    </div>	
 </section>	
  <?php
	 require("footer.php");
	?>
</body>
</html>

