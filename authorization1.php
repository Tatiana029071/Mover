<?php
session_start();  
// var_dump($_SESSION);
// if (isset($_SESSION['username']))
//    session_destroy();


if (!empty($_SESSION['username'])){
   
    header('location:autho_1.php');
}
else {
    header('location:autho.php');
}
?>


 
 

 

