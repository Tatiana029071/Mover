<?php 
session_start();
// var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="CSS/style.css">
  <link rel="icon" href="Favicon/favicon5.png">
	<title>Моторные масла</title>
</head>
<body id="pr">
  <!-- верхняя панель -->
 <?php
   require("header.php");
 ?>
 <!-- контент -->
  <section class="promo">
		<div class="container">
			<div class="zagolovok">
				<h2> Автомобильные масла </h2>
      </div>
			<div class="promo-inner">
        <div class="column">  
          <?php  
            $query = "SELECT * FROM product ORDER BY id ASC";
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
          <div class="card_15" style="color:#7f7d7d">
           <form method="post" action="oil.php?action=add&id=<?php echo $row["id"]; ?>">
                <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;">
                  <?php echo '<img class="img_9"src='.$row["img"].'>';?>	
                  <h4 class="text-info"><?php echo $row["name"]; ?></h4>
                  <h4 class="text-danger"style="color:#252424">Цена: <?php echo $row["price"]; ?> руб</h4>
                  
                  <input type="text" name="quantity" value="" class="form-control" />
                  <input type="hidden" name="name" value="<?php echo $row["name"]; ?>" />
                  <input type="hidden" name="price" value="<?php echo $row["price"]; ?>" />
                  <input type="hidden" name="img" value="<?php echo $row["img"]; ?>" />
                  <input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />
                 <p> <input type="submit" value="Добавить" name="Добавить" style="margin-top:5px;" class="btn_btn-success"style="color:#d92338" value="Добавить в корзину" /></p>
                </form>       
        </div>
              </form>
            
          </div>
          <?php
          }
          }
          ?>
        </div> 
     </div>
     <div class="pagination">
  <a style="color:white"href="?pageno=1">Первая</a>
  <!-- <?php if($pageno <= 1){ echo 'disabled'; } ?> -->
  <a style="color:white"href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Предыдущая</a>
  <!-- <?php if($pageno >= $total_pages){ echo 'disabled'; } ?> -->
  <a style="color:white"href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Следующая</a>
  <a style="color:white"href="?pageno=<?php echo $total_pages; ?>">Последняя</a>
</div>
 </section>
  <?php
	 require("footer.php");
	?>
</body>
</html>

<?php 
if(isset($_POST['Добавить'])){
  $name = $_POST['name'];
  $price = $_POST['price'];
  $img = $_POST['img'];
  // echo $name;

  //     подключение к базе данных 
   require("connections.php");
  }
   //    Вставляем данные, подставляя их в запрос 
  $sql = mysqli_query($linkdb, "INSERT INTO `cart`(`name`, `price`,`img`) VALUES ('$name', '$price', '$img')");
  //Если вставка прошла успешно
  // if ($sql) {
  //   echo '<a href="oil.php"><p>Данные успешно добавлены в таблицу.</p>';
  // } else {
  //   echo '<p>Произошла ошибка: ' . mysqli_error($linkdb) . '</p>';
  // }
 ?>