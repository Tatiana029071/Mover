<?php
session_start();
 // var_dump($_SESSION);
   //     подключение к базе данных 
   require("../connections.php");
 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="icon" href="../Favicon/favicon3.png">
    <title>Панель администрирования</title>
</head>
<body>
<div style = "text-align: center">
    <?php  if (!empty($_SESSION['login'])) :?>
    <?php echo "Здравствуйте,"." ".$_SESSION['login']."!" ; ?>
    <br>
    <a href="../Admin/admin.php">Выйти</a>
    <br>
    <a href="../index.php">Вернуться на сайт</a>
<section class="promo">
	<div class="container">
		<div class="promo-inner">
      <div class="form">
        <form action='..//Admin/newart.php' method='post'>
         <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; width: 25%;">
          <h3>Добавление нового товара </h3>
          <label for="inputText2">Название товара:</label>
          <input type="text2" name="name" placeholder = "Лукойл" required />
          <br>
          <label for="inputText2">Цена:</label>
          <input type="price" name="price"placeholder = "4000" required />
          <br>
          <label for="inputText2">Категория:</label>    
<input name="categories" />
<select id="categories">
   <option value="Synthetic oil">Synthetic oil</option>
   <option value="engine">engine</option>
   <option value="Oil">OIL</option>
</select>

          <br>
          <label for="inputText2">Ссылка на Изображение:</label>
          <input type="img" name="img"placeholder = "img" required />
          <button class="btn-group_1" type="submit" name="register" value="register">Добавить товар</button>
         </div>
       </form>
         
         <?php  
          //     подключение к базе данных 
           require("../connections.php");
            $query = "SELECT * FROM product";
            $result = mysqli_query($linkdb, $query);
            if(mysqli_num_rows($result) > 0)
            {

              // Пагинация
              // Поверка, есть ли GET запрос
              if (isset($_GET['pageno'])) {
              // Если да то переменной $pageno присваиваем его
              $pageno = $_GET['pageno'];
              } else { // Иначе
              // Присваиваем $pageno один
              $pageno = 1;
              }
              // Назначаем количество данных на одной странице
              $size_page = 6;
              // Вычисляем с какого объекта начать выводить
              $offset = ($pageno-1) * $size_page;
              // SQL запрос для получения количества элементов
              $count_sql = "SELECT COUNT(*) FROM `product`";
              // Отправляем запрос для получения количества элементов
              $result1 = mysqli_query($linkdb, $count_sql);
              // Получаем результат
              $total_rows = mysqli_fetch_array($result1)[0];
              // Вычисляем количество страниц
              $total_pages = ceil($total_rows / $size_page);

              // Создаём SQL запрос для получения данных
              $sql = "SELECT * FROM `product` LIMIT $offset, $size_page";
              // Отправляем SQL запрос
              $res_data = mysqli_query($linkdb, $sql);
              // Цикл для вывода строк
              while($row = mysqli_fetch_array($res_data))
                {
          ?>
        <form method="post" action="delete.php">
          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; width: 25%;">
           <h3>Удаление товара: </h3>
           <?php echo '<img style="width: 200px; "src=../'.$row["img"].'>';?>	
            <h4><?php echo $row["name"];?></h4>
            <h4 style="color:#252424">Цена: <?php echo $row["price"]; ?> руб</h4>
            <h4 style="color:#252424">Id: <?php echo $row["id"]; ?></h4>
            <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
            <input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />
           <button class="btn-group_1" type="submit" name="register" value="delete">Удалить товар</button>  
          </form>
          <form method="post" action="red.php"><button class="btn-group_1" type="submit" name="register" value="red.php">Изменить товар</button> </form>
          </div>
         
    </div> 
  </div>    
</section>>
          
          </div>
        </form>  
    </div> 
  </div>    
</section>
  <?php
   }
    }
  ?>

  

 <div class="pagination">
 <a style="color:black"href="?pageno=1">Первая</a>
    <!-- <?php if($pageno <= 1){ echo 'disabled'; } ?> -->
    <a style="color:black"href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Предыдущая</a>
    <!-- <?php if($pageno >= $total_pages){ echo 'disabled'; } ?> -->
    <a style="color:black"href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Следующая</a>
    <a style="color:black"href="?pageno=<?php echo $total_pages; ?>">Последняя</a>
    </div>
 <?php endif?>
 <script> 
    $('select#categories').on('change', function() {
    $('input[name="categories"]').val(this.value);
   });
  </script>
</body>
</html>