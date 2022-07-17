<?php 
    require $_SERVER['DOCUMENT_ROOT'].'/MySQL/connectSQL.php';
    $Id = $_GET['id'];

    $result = $mysql->query("SELECT * FROM `reference-fields` WHERE `id` = $Id");
    $result = $result->fetch_assoc();
    $attempt = $result['attempt'];
$patchnewfile = $Id."d".$attempt.".jpg";
$attempt++;


   if($_FILES["img_otpravka"]["size"] > 1024*10*1024)
   {
     echo ("Размер файла превышает 10 мегабайт");
     exit;
   }
   // Проверяем загружен ли файл
   if(is_uploaded_file($_FILES["img_otpravka"]["tmp_name"]))
   {
     // Если файл загружен успешно, перемещаем его
     // из временной директории в конечную
     $mysql->query("INSERT INTO `reference-fields` (`img`) VALUES ('$img')");
     move_uploaded_file($_FILES["img_otpravka"]["tmp_name"], "../img/".$patchnewfile);

     $result = $mysql->query("UPDATE `reference-fields` SET `attempt` = '$attempt', `text` = '$patchnewfile' WHERE `reference-fields`.`id` = $Id");
   } else {
      echo("Ошибка загрузки файла");
   }

   $messId=$_GET['messId'];
   header('Location: /reference/edit_reference?id='.$messId);
?>