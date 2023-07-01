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
	<title>Корзина товаров</title>
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
			 <h2> Корзина товаров </h2>
           </div>
		 <div class="promo-inner">
             <!-- <div class="column">   -->
             <?php  
                $query = "SELECT * FROM cart ORDER BY id ASC LIMIT 0, 6";
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
              $count_sql = "SELECT COUNT(*) FROM `cart`";
              // Отправляем запрос для получения количества элементов
              $result1 = mysqli_query($linkdb, $count_sql);
              // Получаем результат
              $total_rows = mysqli_fetch_array($result1)[0];
              // Вычисляем количество страниц
              $total_pages = ceil($total_rows / $size_page);

              // Создаём SQL запрос для получения данных
              $sql = "SELECT * FROM `cart` LIMIT $offset, $size_page";
              // Отправляем SQL запрос
              $res_data = mysqli_query($linkdb, $sql);
              // Цикл для вывода строк
              while($row = mysqli_fetch_array($res_data))
                {
              ?>
             <div class="card_17" style="color:#7f7d7d">
              <form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
                  <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;">
                  <?php echo '<img class="img_9"src='.$row["img"].'>';?>	
                  <h4 class="text-info"><?php echo $row["name"]; ?></h4>
                  <h4 class="text-danger"style="color:#252424">Цена: <?php echo $row["price"]; ?> руб</h4>
                  <input type="hidden" name="name" value="<?php echo $row["name"]; ?>" />
                  <input type="hidden" name="price" value="<?php echo $row["price"]; ?>" />
                  <input type="hidden" name="img" value="<?php echo $row["img"]; ?>" />
                  <input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />
                  <p> <input type="submit" value="Удалить" name="Удалить" style="margin-top:5px;" class="btn_btn-success_1"style="color:red;" value="Оформить заказ" /></p>
                </form>       
          </div>
          <?php
          }
          }
          ?>
        </div> 
     <div class="pagination">
        <a style="color:white"href="?pageno=1">Первая</a>
        <!-- <?php if($pageno <= 1){ echo 'disabled'; } ?> -->
        <a style="color:white"href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Предыдущая</a>
        <!-- <?php if($pageno >= $total_pages){ echo 'disabled'; } ?> -->
        <a style="color:white"href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Следующая</a>
        <a style="color:white"href="?pageno=<?php echo $total_pages; ?>">Последняя</a>
        </div>
        </div>
 </section>
  <?php
	 require("footer.php");
	?>
</body>
</html>

<?php   
//удаление товаров
// var_dump($_SESSION);
if (isset($_POST['Удалить'])){
$name = $_POST['name'];
$price= $_POST['price'];
echo $name;

 //     подключение к базе данных 
 require("connections.php");
}
    // Вставляем данные, подставляя их в запрос 
 $query = "DELETE FROM cart WHERE name='$name'";
 $newRow = mySqli_query($linkdb, $query);
//  if ($query) {
//    echo '<a href="adminpanel.php"><p>Данные успешно удалены.</p>';
//  } else {
//    echo '<p>Произошла ошибка: ' . mysqli_error($linkdb) . '</p>';
//  }

 ?>
