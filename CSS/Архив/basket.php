
<?php
$id = $_GET['id'];

// Check if the add to cart button was clicked or someone just wants to load this page. This POST method `add` is from the id of the add to cart button on the detail page.
if(isset($_POST['add'])) {
  // Check if there is a session for the cart set already, if not then set one.
  if(!isset($_SESSION['shoppingcart'])) {
    $_SESSION['shoppingcart'] = [];
  }

  $quantity = $_POST['quantity'];

  $item = [
    "id"       => $id,
    "quantity" => $quantity
  ];

  // Now add new item to the cart
  array_push($_SESSION['shoppingcart'], $item);

  // Once added let's take the user to the cart page
  header("Location: index.php");
} else {
  // If the add to cart button was not clicked then go back to the products page.
  header("Location: products.php");
}





// session_start();
// //     подключение к базе данных 
// require("connections.php");
// $id = $_POST['id'];
// echo $id;
// // Check if the add to cart button was clicked or someone just wants to load this page. This POST method `add` is from the id of the add to cart button on the detail page.
// if(isset($_POST['add'])) {
//   // Check if there is a session for the cart set already, if not then set one.
//   if(!isset($_SESSION['shoppingcart'])) {
//     $_SESSION['shoppingcart'] = [];
//   }

//   $quantity = $_POST['quantity'];

//   $item = [
//     "id"       => $id,
//     "quantity" => $quantity
//   ];

//   // Now add new item to the cart
//   array_push($_SESSION['shoppingcart'], $item);

//   // Once added let's take the user to the cart page
//   header("Location: index.php");
// } else {
//   // If the add to cart button was not clicked then go back to the products page.
//   header("Location: index.php");}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body id="pr">
  <!-- верхняя панель -->
  <?php
   require("header.php");
  ?>
 <!-- контент -->
	<div id="container"> 
 
		<div id="main"> 
			 
		</div><!--end main--> 
		 
		<div id="sidebar"> 
			 
		</div><!--end sidebar--> 
 
	</div><!--end container--> 
   
</body> 
</html>