<?php 
    require $_SERVER['DOCUMENT_ROOT'].'/MySQL/connectSQL.php';
    $Id = $_GET['id'];

    $result = $mysql->query("DELETE FROM `reference` WHERE `id` = $Id");
 
    header('Location: /reference/edit/');
?>