<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../CSS/style.css">
        <link rel="icon" href="../Favicon/favicon3.png">
    <title>Вход в панель администрирования</title>
</head>
<body id="pr">

    <!-- контент -->
    <section class="promo">
      <div class="containerAdmin">
         <div class="promo-inner">
             <div class="conect">
                 <h1 style = "text-align: center; padding-top: 100px; color:red">Вход в административную панель</h1>
                 <div class="form">
                     <form method="POST" action="adminAVT.php" name="signup-form">
                         <div class="form-element">
                             <label for="inputText2">Введите логин</label>
                             <input type="text2" name="login" placeholder = "login" required />
                             <label for="inputText2">Введите пароль</label>
                             <input type="password" name="password"placeholder = "password" required />
                         </div>
                         <button class="btn-group_1" type="submit" name="register" value="register">Войти</button>
                     </form>
                 </div>
               </div>
         </div>
      </div>	
    </section>
</body>
</html>
