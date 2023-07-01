<?
//Этим мы устанавливаем файл cookie с именем cookie_tmp, значением $uid
// и временем жизни 1 неделя с настоящего момента.
// Этот файл вставляем ДО вывода ЛЮБЫХ тэгов html на все (или на какие надо)
// страницы нашего сайта:
if (isset ($cookie_tmp))
{ $uid = $cookie_tmp; }
else {
srand(time());
$uid = md5(uniqid( ""));
setcookie ( "cookie_tmp",$uid,time()+604800, "/"); }
?>