<?php
// require $_SERVER['DOCUMENT_ROOT'] . "./functions/connect.php";
// При подключении через require выдаёт ошибку доступа: Failed to open stream: Permission denied in... 
$user = "root";
$password = "";
$host = "localhost";
$db = "clients";
$dbh = 'mysql:host=' . $host . ';dbname=' . $db . ';charset=utf8';
$pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);

$name = htmlspecialchars(trim($_POST["name"]));
$categories = htmlspecialchars(trim($_POST["categories"]));
$price = htmlspecialchars(trim($_POST["price"]));
$img = htmlspecialchars(trim($_POST["img"]));
$id = htmlspecialchars(trim($_POST["id"]));

// обновление и удаление товара
if (isset($_POST['save'])) {
    $row = "UPDATE product SET name=:name,categories=:categories,price=:price,img=:img WHERE id = '$id'";
    $query = $pdo->prepare($row);
    $query->execute([
        "name" => $name,
        "categories" => $categories,
        "price" => $price,
        "img" => $img
    ]);
} elseif (isset($_POST['delete'])) {
    $sql = $pdo->prepare("DELETE FROM product WHERE id = '$id'");
    $sql->execute();
}
header('location:adminpanel.php');
