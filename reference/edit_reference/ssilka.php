<?php 
    require $_SERVER['DOCUMENT_ROOT'].'/MySQL/connectSQL.php';
    $Id = $_GET['id'];
 

    
    $result = $mysql->query("SELECT * FROM `reference` WHERE `id` = $Id");
    $result = $result->fetch_assoc();
    $s_true = $result['s_true'];
    if($s_true=null||$s_true==0)
    $s_true=1;
    else
    $s_true=0;

    $mysql->query("UPDATE `reference` SET `s_true` = '$s_true' WHERE `reference`.`id` = $Id");


   header('Location: /reference/edit_reference?id='.$Id);
?>