<?php
$login = filter_var(trim($_POST['DBLogin']),FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['DBPassword']),FILTER_SANITIZE_STRING);
$CEKPETHblU_KOD = filter_var(trim($_POST['DBsekret_kod']),FILTER_SANITIZE_STRING);

if(mb_strlen($login)<5){
    echo"Слишком короткий логин";
    exit();
}
if(mb_strlen($login)>20){
    echo"Слишком длинный логин. Максимальная длинна логина должна быть 20 символов.";
    exit();
}

if(mb_strlen($password)<6){
    echo"Слишком короткий пароль. Длина должна составлять 6-20 символов.";
    exit();
}
if(mb_strlen($password)>20){
    echo"Слишком длинный пароль. Длина должна составлять 6-20 символов.";
    exit();
}

$password = md5($password."fmeechcompany");//соль хеша

require $_SERVER['DOCUMENT_ROOT'].'/MySQL/connectSQL.php';


$result = $mysql->query("SELECT * FROM `user` 
WHERE `Login` = '$login'");
$user=$result->fetch_assoc();

if(!($user===null)){//Если чел с таким логином уже есть в бд
    $mysql->close();
    setcookie('p1','',time()+60*60*24*356,"/");
 echo "Такой Логин уже занят!";
    exit();
}



$Secret = $mysql->query("SELECT * FROM `admin-panel`");
$SecretKey =$Secret->fetch_assoc();
$SecretKey = $SecretKey['SecretKey'];

if($SecretKey!=$CEKPETHblU_KOD){
   //Если секреетный код не совпадает при регистрации
   $mysql->close();
   header('Location: /reg/indexERROR.php');
    exit();
}


$mysql->query("INSERT INTO `user` ( `Login`, `Password`) 
VALUES('$login','$password')");

$mysql->close();

setcookie('l1',$login,time()+60*60*24*356,"/");
setcookie('p1',$password,time()+60*60*24*356,"/");

header('Location: /');//Продолжение заполнения ФИО при РЕГИСТРАЦИИ
?>