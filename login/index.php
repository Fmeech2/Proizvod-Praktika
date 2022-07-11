<?php 


if($_COOKIE['p1']==''){//Если пользователь ещё не логинился
    require $_SERVER['DOCUMENT_ROOT'].'/login/login1.php';
    exit();
}


$login = $_COOKIE['l1'];
$password = $_COOKIE['p1'];

require $_SERVER['DOCUMENT_ROOT'].'/MySQL/connectSQL.php';

$result = $mysql->query("SELECT * FROM `user` 
WHERE `Login` = '$login' 
AND `Password` = '$password'");
$user=$result->fetch_assoc();

if($user===null){//Если данные пользователя не совпадают в бд
    $mysql->close();
    setcookie('p1','',time()+60*60*24*356,"/");
    require $_SERVER['DOCUMENT_ROOT'].'/login/login1.php';
    exit();
}

//Если пользователь успешно зашёл
$mysql->close();

header('Location: /');


?>


