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
    echo"Юзер не найден для Стартового редактирования профиля";
    exit();
}



$Name = filter_var(trim($_POST['Name']),FILTER_SANITIZE_STRING);
$SName =filter_var(trim($_POST['SName']),FILTER_SANITIZE_STRING);
$PName =filter_var(trim($_POST['PName']),FILTER_SANITIZE_STRING);
$Email =filter_var(trim($_POST['Email']),FILTER_SANITIZE_STRING);

$result = $mysql->query("UPDATE `user` 
SET 
`Name` = '$Name', 
`SName` = '$SName', 
`PName` = '$PName', 
`Email` = '$Email'
 WHERE `user`.`id` = '$user[id]'");
 if($Name!=''&&$SName!=''&&$PName!=''){
     header('Location: /');//Если всё введено то на главную
 }else{
    header('Location: ../');
 }
?>