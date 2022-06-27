<?php
    $input=filter_var($_POST['input'],FILTER_SANITIZE_STRING);;
    if(trim($input)==''){header('Location: /MySQL/NewOldNewMessage.php ');}
    else{
    $login = $_COOKIE['l1'];
    $password = $_COOKIE['p1'];
                   $mysql = new mysqli('localhost', 'root', 'root', 'revolutionary-db');
                   $result = $mysql->query("SELECT * FROM `user` 
                   WHERE `Login` = '$login' 
                   AND `Password` = '$password'");
                                               $user = $result->fetch_assoc();
                   
                                               if ($user === null) { //Если данные пользователя не совпадают в бд
                                                   $mysql->close();
                                                   setcookie('p1', '', time() + 60 * 60 * 24 * 356, "/");
                                                   header('Location: /login/');
                                                   exit();
                                               }
                                               $userID = $user['id'];

$Necessity=             $_GET['Ne'];
$Type=                  $_GET['Ty'];
$Division=              $_GET['Di'];
$Date=date("Y-m-d H:i:s"); 
$IdSenderMessage= $userID;
$IdUniqueApplication=   $_GET['In'];
$IdUser=   $_GET['ir']; 

$mysql->query("INSERT INTO `message` (`IdUser`, `IdUniqueApplication`, `Date`, `Appeal`, `IdSenderMessage`) 
VALUES('$IdUser','$IdUniqueApplication','$Date','$input','$IdSenderMessage')");

header('Location: /MySQL/NewOldNewMessage.php ');
}
?>
