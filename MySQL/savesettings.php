<?php
    $login = $_COOKIE['l1'];
 $password = $_COOKIE['p1'];


$mysql=new mysqli('localhost','root','root','revolutionary-db');

$result = $mysql->query("SELECT * FROM `user` 
WHERE `Login` = '$login' 
AND `Password` = '$password'");
$user=$result->fetch_assoc();

$userID=$user['id'];
if($user===null){//Если данные пользователя не совпадают в бд
    $mysql->close();
    setcookie('p1','',time()+60*60*24*356,"/");
    header('Location: /login/');
    exit();
}
$adMresult = $mysql->query("SELECT * FROM `admin-panel`");
$AdminUser=$adMresult->fetch_assoc();
if($userID==$AdminUser['IdAdmin']){
   //Если админ успешно зашёл

   $nickname = filter_var(trim($_POST['nickname']), FILTER_SANITIZE_STRING);
   $SecretKey = filter_var(trim($_POST['SecretKey']), FILTER_SANITIZE_STRING);
   $Policy = filter_var(trim($_POST['Policy']), FILTER_SANITIZE_STRING);

   $mysql->query("UPDATE `admin-panel` 
   SET `SecretKey` = '$SecretKey', 
   `UserАgreement` = '$Policy', 
   `nickname` = '$nickname' 
   WHERE `admin-panel`.`id` = 1");

   $mysql->close();

   header('Location: /');
}
else{//этот юзер зарегестрирован, но он не администратор
    $mysql->close();
    header('Location: /');
}


?>