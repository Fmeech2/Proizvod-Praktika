<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

    $input=filter_var($_POST['input'],FILTER_SANITIZE_STRING);;
    if(trim($input)==''){header('Location: /MySQL/NewOldNewMessage.php ');}
    else{
    $login = $_COOKIE['l1'];
    $password = $_COOKIE['p1'];
    require $_SERVER['DOCUMENT_ROOT'].'/MySQL/connectSQL.php';
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

                                               $NSP=$user['SName']." ".$user['Name']." ".$user['PName'];
$Necessity=             $_GET['Ne'];
$Type=                  $_GET['Ty'];
$Division=              $_GET['Di'];
$Date=date("Y-m-d H:i:s"); 
$IdSenderMessage= $userID;
$IdUniqueApplication=   $_GET['In'];
$IdUser=   $_GET['ir']; 

$mysql->query("INSERT INTO `message` (`IdUser`, `IdUniqueApplication`, `Date`, `Appeal`, `IdSenderMessage`) 
VALUES('$IdUser','$IdUniqueApplication','$Date','$input','$IdSenderMessage')");



$login = $_COOKIE['l1'];
$password = $_COOKIE['p1'];
$result2 = $mysql->query("SELECT * FROM `user` 
WHERE `Login` = '$login' 
AND `Password` = '$password'");

$user=$result2->fetch_assoc();

$iduser=$user['id'];

$adm = $mysql->query("SELECT * FROM `admin-panel`");
$admResult =$adm->fetch_assoc();
$SendingByMail=$admResult['SendingByMail'];
$IdAdmin=$admResult['IdAdmin'];


if($SendingByMail==2&&$iduser!=$IdAdmin){

//ОТПРАКА СООБЩЕНИЙ НА ПОЧТУ НАЧИНАЕТСЯ ЗДЕСЬ
//ОТПРАКА СООБЩЕНИЙ НА ПОЧТУ НАЧИНАЕТСЯ ЗДЕСЬ

// Подключаем библиотеку PHPMailer

require $_SERVER['DOCUMENT_ROOT'].'/PHPMailer-master/src/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'].'/PHPMailer-master/src/SMTP.php';
 
require $_SERVER['DOCUMENT_ROOT'].'/MySQL/connectSQL.php';

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
 
$mail->Subject = "Вам ответили";
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
        <h1 style='display: flex;flex-wrap: wrap;justify-content: center;'>Вам ответили</h1>
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
                        <div style='color: rgb(10, 10, 10);font-weight: 700; font-size: 120%; display: flex;'>Сообщение к обращению :
                            <div style='color: rgb(82, 82, 82);font-weight: 500; font-size: 80%; '>(id:".$IdUniqueApplication.")</div>
                     </div>
                     ".$input."
                    </div>
                    <hr style='margin-bottom: 0;''>
                    Перейти в сообщения:  http://localhost/MySQL/NewOldNewMessage.php?message=".$IdUniqueApplication."
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







header('Location: /MySQL/NewOldNewMessage.php ');
}
?>
