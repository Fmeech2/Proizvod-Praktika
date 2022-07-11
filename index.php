<?php // видеть все ошибки!

require $_SERVER['DOCUMENT_ROOT'].'/profil/profilStart.php';//  <-- ОБЯЗАТЕЛЬНО ДОЛЖНО СТОЯТЬ В НАЧАЛЕ КАЖДОГО PHP ФАЙЛА  <--

if($_COOKIE['p1']==''){//Если пользователь ещё не логинился
    header('Location: /login/');
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
    header('Location: /login/');
    exit();
}
$userID=$user['id'];
//Если пользователь успешно зашёл



$adminPanelIDproverka = $mysql->query("SELECT * FROM `admin-panel`");
$adminid=$adminPanelIDproverka->fetch_assoc();
$mysql->close();
if($adminid['IdAdmin']==$userID){
    require $_SERVER['DOCUMENT_ROOT'].'/adminindex.php';
}
else{
    require $_SERVER['DOCUMENT_ROOT'].'/index2.php';
}
?>


