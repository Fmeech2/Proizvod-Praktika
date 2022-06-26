<?php
//Выйти из профиля
    setcookie('p1','',time()+60*60*24*356,"/");
    setcookie('l1','',time()+60*60*24*356,"/");
    header('Location: /');
?>