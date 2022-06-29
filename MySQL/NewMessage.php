<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$Appeal = filter_var(trim($_POST['Appeal']),FILTER_SANITIZE_STRING);
if($Appeal==''){
    header('Location: /');
    exit();
}

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



$Division = filter_var(trim($_POST['Division']),FILTER_SANITIZE_STRING);
$Type =     filter_var(trim($_POST['Type']),FILTER_SANITIZE_STRING);
$Necessity =filter_var(trim($_POST['Necessity']),FILTER_SANITIZE_STRING);
$IdAppeal = $MaxIdOperation;
$mysql->query("INSERT INTO `globally-appeal` (`Division`, `Type`, `Necessity`, `IdAppeal`) 
VALUES('$Division','$Type','$Necessity','$IdAppeal')");


$iduser=$user['id'];
$NSP=$user['SName']." ".$user['Name']." ".$user['PName'];
$Date=date("Y-m-d H:i:s"); 

$mysql->query("INSERT INTO `message` (`IdUser`, `IdUniqueApplication`, `Date`, `Appeal`, `IdSenderMessage`) 
VALUES('$iduser','$MaxIdOperation','$Date','$Appeal','$iduser')");







$adm = $mysql->query("SELECT * FROM `admin-panel`");
$admResult =$adm->fetch_assoc();
$SendingByMail=$admResult['SendingByMail'];

if($SendingByMail==1||$SendingByMail==2){

//ОТПРАКА СООБЩЕНИЙ НА ПОЧТУ НАЧИНАЕТСЯ ЗДЕСЬ
//ОТПРАКА СООБЩЕНИЙ НА ПОЧТУ НАЧИНАЕТСЯ ЗДЕСЬ

// Подключаем библиотеку PHPMailer

require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';
 
$mysql=new mysqli('localhost','root','root','revolutionary-db');

$result = $mysql->query("SELECT * FROM `admin-panel`");
$result =$result->fetch_assoc();
$idAdmin = $result['IdAdmin'];

$email = $mysql->query("SELECT * FROM `user` WHERE `id` = '$idAdmin'");
$email =$email->fetch_assoc();
$idAdmin = $email['Email'];

// Создаем письмо
$mail = new PHPMailer();
$mail->isSMTP();                   // Отправка через SMTP
$mail->Host   = 'smtp.gmail.com';  // Адрес SMTP сервера
$mail->SMTPAuth   = true;          // Enable SMTP authentication
$mail->Username   = 'pngclassic.online@gmail.com';       // ваше имя пользователя (без домена и @)
$mail->Password   = 'qhhtrmipuoaxumwt';    // ваш пароль
$mail->SMTPSecure = 'tsl';         // шифрование ssl
$mail->Port   = 587;               // порт подключения


$mail->CharSet = 'UTF-8';

$mail->setFrom('pngclassic.online@gmail.com', 'Сайт заявок: уведомление включены');    // от кого
$mail->addAddress($idAdmin, 'Администрации'); // кому
 
$mail->Subject = "Новая заявка";
if($Necessity=="1"){
    $Necessity="Не срочно";
    $Nclass="com_vaj1";
}
else if($Necessity=="2"){
    $Necessity="Важно";
    $Nclass="com_vaj2";
}
else if($Necessity=="3"){
    $Necessity="Экстренно";
    $Nclass="com_vaj3";
}
$mail->msgHTML("

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Новая заявка</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- Только CSS -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor' crossorigin='anonymous'>
        <style>
        .com_vaj1 {
font-weight: bold;
background-color: rgb(45, 126, 7);
padding: 0 10px 0 10px;
border-radius: 10px;
color: aliceblue;
}
.com_vaj2 {
font-weight: bold;
background-color: rgb(255, 168, 68);
padding: 0 10px 0 10px;
border-radius: 10px;
color: aliceblue;
}
.com_vaj3 {
font-weight: bold;

background-color: rgb(255, 68, 68);
padding: 0 10px 0 10px;
border-radius: 10px;
color: aliceblue;
}
    </style>
</head>
<body>
    <div style='background-color: rgba(209, 209, 209, 0.521);'>
        <h1 style='display: flex;flex-wrap: wrap;justify-content: center;'>Новая заявка</h1>
        <div style='display: flex;flex-wrap: wrap;justify-content: center;'>
            <div style='width: 600px;'>
            <div style='width:100%;min-height: 100px; background-color: rgb(255, 255, 255); margin-bottom: 50px; padding: 10px;'>
                    <div style='color: rgb(128, 128, 128);font-weight: 600;'> Пользователь: ".$NSP."
                        Дата: ".$Date."</div>
                        <div style='display: flex;'>
                        <div class='".$Nclass."' style='width: 100px;'>
                        ".$Necessity."           
                    </div>
                    <div style='color: rgb(82, 82, 82);font-weight: 500; font-size: 100%; margin-left: 20px;'>Тип: ".$Type."</div>
                    </div>
                    <div style='color: rgb(10, 10, 10);font-weight: 600; font-size: 120%; margin: 10px;'>
                        <div style='color: rgb(10, 10, 10);font-weight: 700; font-size: 120%; display: flex;'>Обращение :
                            <div style='color: rgb(82, 82, 82);font-weight: 500; font-size: 80%; '>(id:".$IdAppeal.")</div>
                     </div>
                     ".$Appeal."
                    </div>
                    <hr style='margin-bottom: 0;''>
                    Перейти в сообщения:  http://localhost/MySQL/NewOldNewMessage.php?message=".$IdAppeal."
                </div>
            </div>
        </div>
    </div>
</body>

</html>


");
// Отправляем
$mail->send();
//ОТПРАКА СООБЩЕНИЙ НА ПОЧТУ ЗАКАНЧИВАЕТСЯ ЗДЕСЬ
//ОТПРАКА СООБЩЕНИЙ НА ПОЧТУ ЗАКАНЧИВАЕТСЯ ЗДЕСЬ
}






$mysql->close();
header('Location: /OK.php');
?>







