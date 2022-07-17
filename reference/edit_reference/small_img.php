<?php 
    require $_SERVER['DOCUMENT_ROOT'].'/MySQL/connectSQL.php';
    $Id = $_GET['id'];

    $result = $mysql->query("SELECT * FROM `reference-fields` WHERE `id` = $Id");
    $result = $result->fetch_assoc();
    $attempt = $result['attempt'];
    $type = $result['type'];
    if($type==2)
    $type=4;
    else $type=2;
$patchnewfile = $Id."d".$attempt.".jpg";
$attempt++;


     $result = $mysql->query("UPDATE `reference-fields` SET `type` = '$type' WHERE `reference-fields`.`id` = $Id");


   $messId=$_GET['messId'];
   header('Location: /reference/edit_reference?id='.$messId);
?>