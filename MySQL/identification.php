<?php
$login = filter_var(trim($_POST['DBLogin']),FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['DBPassword']),FILTER_SANITIZE_STRING);


$password = md5($password."fmeechcompany");//соль хеша

$mysql=new mysqli('localhost','root','root','revolutionary-db');

$result = $mysql->query("SELECT * FROM `user` 
WHERE `Login` = '$login' 
AND `Password` = '$password'");
$user=$result->fetch_assoc();

if($user===null){
    $mysql->close();
    setcookie('p1','',time()+60*60*24*356,"/");
    echo"Юзер не найден";
    exit();
}


setcookie('l1',$user['Login'],time()+60*60*24*356,"/");
setcookie('p1',$user['Password'],time()+60*60*24*356,"/");

$mysql->close();

header('Location: /');
?>

