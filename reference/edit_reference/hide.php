<?php 
    require $_SERVER['DOCUMENT_ROOT'].'/MySQL/connectSQL.php';
    $Id = $_GET['id'];

    
    $result = $mysql->query("SELECT * FROM `reference` WHERE `id` = $Id");
    $result = $result->fetch_assoc();
    $open = $result['open'];
    if($open=null||$open==0)
    $open=1;
    else
    $open=0;

    $mysql->query("UPDATE `reference` SET `open` = '$open' WHERE `reference`.`id` = $Id");


   header('Location: /reference/edit_reference?id='.$Id);
?>