<?php
require $_SERVER['DOCUMENT_ROOT'].'/MySQL/connectSQL.php';
if (isset($_POST['yes'])) 
{
    $id = filter_var($_GET['i'], FILTER_SANITIZE_STRING);

    $mysql->query("UPDATE `globally-appeal` SET `process` = '2' WHERE `IdAppeal` = $id"); 

    $mysql->close();
    header('Location: /MySQL/NewOldNewMessage.php?message='.$id);
}
 elseif (isset($_POST['no'])) {
    $id = filter_var($_GET['i'], FILTER_SANITIZE_STRING);

    $mysql->query("UPDATE `globally-appeal` SET `process` = '3' WHERE `IdAppeal` = $id"); 

    $mysql->close();
    header('Location: /MySQL/NewOldNewMessage.php?message='.$id);
}
?>