<?php
$mysql=new mysqli('localhost','root','root','revolutionary-db');

$login = $_COOKIE['l1'];
$password = $_COOKIE['p1'];
$result = $mysql->query("SELECT * FROM `user` 
WHERE `Login` = '$login' 
AND `Password` = '$password'");

$user=$result->fetch_assoc();

if($user===null){
    $mysql->close();
    setcookie('p1','',time()+60*60*24*356,"/");
    echo"Юзер для отправки сообщения не найден";
    exit();
}


$MaxIdOperation = $mysql->query("SELECT * FROM `message` ORDER BY `IdUniqueApplication` DESC LIMIT 1");
$MaxIdOperation=$MaxIdOperation->fetch_assoc();
$MaxIdOperation=$MaxIdOperation['IdUniqueApplication'];
$MaxIdOperation=$MaxIdOperation+1;

$Appeal = filter_var(trim($_POST['Appeal']),FILTER_SANITIZE_STRING);


$Division = filter_var(trim($_POST['Division']),FILTER_SANITIZE_STRING);
$Type =     filter_var(trim($_POST['Type']),FILTER_SANITIZE_STRING);
$Necessity =filter_var(trim($_POST['Necessity']),FILTER_SANITIZE_STRING);
$IdAppeal = $MaxIdOperation;
$mysql->query("INSERT INTO `globally-appeal` (`Division`, `Type`, `Necessity`, `IdAppeal`) 
VALUES('$Division','$Type','$Necessity','$IdAppeal')");


$iduser=$user['id'];
$Date=date("Y-m-d H:i:s"); 

$mysql->query("INSERT INTO `message` (`IdUser`, `IdUniqueApplication`, `Date`, `Appeal`, `IdSenderMessage`) 
VALUES('$iduser','$MaxIdOperation','$Date','$Appeal','$iduser')");


$mysql->close();



header('Location: /');//Продолжение заполнения ФИО при РЕГИСТРАЦИИ
?>







