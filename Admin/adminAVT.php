<?php
session_start();
//подключение к базе данных
$user = "root";
$password = "";
$host = "localhost";
$db = "clients";
$dbh = 'mysql:host='.$host.';dbname='.$db.';charset=utf8';
$pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);

//данные из формы
$login = $_POST["login"];
$password = $_POST["password"];

//Подготовка запроса
$sql = $pdo->prepare("SELECT id,login FROM admin WHERE login=:login AND password=:password ");
//Выполнение запроса
$sql->execute(array('login'=>$login, 'password'=>$password));
$array = $sql->fetch(PDO::FETCH_ASSOC);

if ($array["id"] > 0){
    $_SESSION['login'] = $array["login"];
    header('location:../Admin/adminpanel.php');
}
else {
    header('location:../Admin/admin.php');
}
?>
