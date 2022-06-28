<?php
    $mysql = new mysqli('localhost', 'root', 'root', 'revolutionary-db');
    if (isset($_POST['no'])) 
    {
        $Type = filter_var($_POST['Type'], FILTER_SANITIZE_STRING);
        if ($Type != "death") { 
            $mysql->query("DELETE FROM type WHERE Type = '$Type'");        
            $mysql->close();
        }   
        header('Location: /');
    }
     elseif (isset($_POST['yes'])) {

    $Type = filter_var(trim($_POST['Appeal']), FILTER_SANITIZE_STRING);

    $mysql->query("INSERT INTO `type` (`id`, `Type`) VALUES (NULL, '$Type')");

    $mysql->close();

    header('Location: /');
}
?>