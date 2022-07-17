<?php 
    require $_SERVER['DOCUMENT_ROOT'].'/MySQL/connectSQL.php';
    $messId=$_GET['messId'];
    $text = $_POST['intext'];


    $mysql->query("UPDATE `reference` SET `name` = '$text' WHERE `reference`.`id` = $messId");



   header('Location: /reference/edit_reference?id='.$messId);
?>