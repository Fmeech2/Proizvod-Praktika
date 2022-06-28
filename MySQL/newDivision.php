<?php
    $mysql = new mysqli('localhost', 'root', 'root', 'revolutionary-db');
if (isset($_POST['no'])) 
{
    $Division = filter_var($_POST['Division'], FILTER_SANITIZE_STRING);
    if ($Division != "death") { 
        $mysql->query("DELETE FROM division WHERE Division = '$Division'");        
        $mysql->close();
    }   
    header('Location: /');
}
 elseif (isset($_POST['yes'])) {

    $Division = filter_var(trim($_POST['Appeal']), FILTER_SANITIZE_STRING);

    $mysql->query("INSERT INTO `division` (`id`, `Division`) VALUES (NULL, '$Division')");

    $mysql->close();

    header('Location: /');
}
?>