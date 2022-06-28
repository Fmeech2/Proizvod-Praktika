<?php 
require 'profil\profilStart.php';//  <-- ОБЯЗАТЕЛЬНО ДОЛЖНО СТОЯТЬ В НАЧАЛЕ КАЖДОГО PHP ФАЙЛА  <--

if($_COOKIE['p1']==''){//Если пользователь ещё не логинился
    header('Location: /login/');
    exit();
}


$login = $_COOKIE['l1'];
$password = $_COOKIE['p1'];


$mysql=new mysqli('localhost','root','root','revolutionary-db');

$result = $mysql->query("SELECT * FROM `user` 
WHERE `Login` = '$login' 
AND `Password` = '$password'");
$user=$result->fetch_assoc();

if($user===null){//Если данные пользователя не совпадают в бд
    $mysql->close();
    setcookie('p1','',time()+60*60*24*356,"/");
    header('Location: /login/');
    exit();
}
$userID=$user['id'];
//Если пользователь успешно зашёл



$adminPanelIDproverka = $mysql->query("SELECT * FROM `admin-panel`");
$adminid=$adminPanelIDproverka->fetch_assoc();
$mysql->close();
if($adminid['IdAdmin']==$userID){
    require 'adminindex.php';
}
else{
    require 'index2.php';
}
?>


