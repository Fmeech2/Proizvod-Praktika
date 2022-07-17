<?php 
    require $_SERVER['DOCUMENT_ROOT'].'/MySQL/connectSQL.php';
    $Id = $_GET['id'];
    $ssilkatext = $_POST['ssilkatext'];

    $mysql->query("UPDATE `reference` SET `ssilka` = '$ssilkatext' WHERE `reference`.`id` = $Id");


   header('Location: /reference/edit_reference?id='.$Id);
?>