<?php 
    require $_SERVER['DOCUMENT_ROOT'].'/MySQL/connectSQL.php';
    $messId=$_GET['messId'];
    $Id = $_GET['id'];

    $result = $mysql->query("DELETE FROM `reference-fields` WHERE `id` = $Id");
 
    header('Location: /reference/edit_reference?id='.$messId);
?>