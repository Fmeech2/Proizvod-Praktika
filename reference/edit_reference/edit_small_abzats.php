<?php 
    require $_SERVER['DOCUMENT_ROOT'].'/MySQL/connectSQL.php';
    $Id = $_GET['id'];
    $text = $_POST['intext'];


    $mysql->query("UPDATE `reference-fields` SET `text` = '$text' WHERE `reference-fields`.`id` = $Id");


   $messId=$_GET['messId'];
   header('Location: /reference/edit_reference?id='.$messId);
?>