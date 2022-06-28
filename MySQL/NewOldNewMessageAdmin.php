<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Оставить заявку</title>
    <!--Регистрация, Заявки, Новые заявки, Профиль, -->
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../main.css'>
    <link rel='stylesheet' type='scss' media='screen' href='../programming message.css'>
    <script src='../main.js'></script>
    <script src='../programming message.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Только CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Пакет JavaScript с Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>

    <div class="start" style="    background-color: rgba(0, 0, 0, 0.062);   min-height: 600px;">
        <!--Этот див тебе не нужен-->
        <div style="width: 100%;  display: flex;flex-wrap: wrap; margin-bottom: auto; ">
            <!--Этот див тебе не нужен-->
            <!-- Шапка-->
            <div style="margin-bottom: 70px; width:100%;">
                <header class="p-2 bg-dark text-white">
                    <div class="container">
                        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                                <img src="https://spb.czm.su/sites/default/files/pictures/main-qimg-dc07846206d7a09a3b35151c0135c3b4.png" width="60px" height="60px">
                            </a>
                            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                                <li><a href="/" class="nav-link px-2 text-white"> Оставить заявку </a></li>
                                <li><a href="#" class="nav-link px-2 text-secondary"> Сообщения </a></li>
                                <li><a href="/profil" class="nav-link px-2 text-white"> Редактировать профиль </a></li>
                            </ul>

                            <div class="text-end">
                                <form action="/MySQL/end.php" method="post">
                                    <a class="a" href="/profil">
                                        <button type="submit" class="btn btn-outline-light me-2">
                                            Выйти из профиля
                                        </button>
                                    </a>
                                    <button type="button" class="btn">
                                        <a class="a" href="/profil">
                                            <div class="exit">
                                                <img src="http://fmeechcompany.fmeech2.website/Гамбол%20Злыдней.png" style="border-radius: 50%;" width="50" alt="Ваш аватар не смог загрузиться. Попробуйте загрузить новое фото, если проблемма не исчезнет со временем.">
                                            </div>
                                        </a>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
            <!-- Шапка-->


            <!--Сообщения-->
            <div class="start-left-Mess">
                <div class="top_nazvan">Ваши обращения</div>
                <div class="start-right_pl">
                    <div class="scroll">
                        <div class="list-group">



                            <?php

                            $IdUnikMessage = $_GET['message'];
                            $IdUnikmes = $_GET['message'];


                            require '../profil\profilStart.php'; //  <-- ОБЯЗАТЕЛЬНО ДОЛЖНО СТОЯТЬ В НАЧАЛЕ КАЖДОГО PHP ФАЙЛА  <--

                            $login = $_COOKIE['l1'];
                            $password = $_COOKIE['p1'];


                            $mysql = new mysqli('localhost', 'root', 'root', 'revolutionary-db');

                            $result = $mysql->query("SELECT * FROM `user` 
WHERE `Login` = '$login' 
AND `Password` = '$password'");
                            $user = $result->fetch_assoc();

                            if ($user === null) { //Если данные пользователя не совпадают в бд
                                $mysql->close();
                                setcookie('p1', '', time() + 60 * 60 * 24 * 356, "/");
                                header('Location: /login/');
                                exit();
                            }
                            $userID = $user['id'];
                            //Если пользователь успешно зашёл

                            $resultMessage = $mysql->query("SELECT * FROM `message` 
WHERE `IdUser` = '$userID' ORDER BY `id` DESC");

                            $message = $resultMessage->fetch_assoc();

                            if ($message === null) { //Если нет ни одного сообщения от пользователя в бд
                                $mysql->close();
                                echo '   
   <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
   <div class="d-flex gap-3 w-100 justify-content-between">
       <div>
           <h6 class="mb-10" style="font-size: 200%;">У вас ещё нет ни одного обращения</h6>
       </div>   
       <div class="mb-0 text-nowrap">    
       </div>
   </div>
</a>
   ';
                            } else { //Если сообщения всё же есть в бд

                                $stack = array("0");
                               
                           

                                while ($message !== null) {
                                    $IdAppeal = $message['IdUniqueApplication'];
                             
                                   if(!in_array($IdAppeal, $stack)){

                                    $globally_appeal = $mysql->query("SELECT * FROM `globally-appeal` 
                                    WHERE `IdAppeal` = '$IdAppeal' ");
                                    $globally_appeal = $globally_appeal->fetch_assoc();
                                    $globally_appeal_Division =  $globally_appeal['Division'];
                                    $globally_appeal_Type =      $globally_appeal['Type'];
                                    $globally_appeal_Necessity = $globally_appeal['Necessity']; 
                                    $globally_appeal_IdAppeal =  $globally_appeal['IdAppeal'];
                                    if ($globally_appeal_Necessity == "1") {
                                        $Necessity = "Не срочно";
                                        $Nclass = "com_vaj1";
                                    } else if ($globally_appeal_Necessity == "2") {
                                        $Necessity = "Важно";
                                        $Nclass = "com_vaj2";
                                    } else if ($globally_appeal_Necessity == "3") {
                                        $Necessity = "Экстренно";
                                        $Nclass = "com_vaj3";
                                    }
                                    $IdUnikMessage = $message['IdUniqueApplication'];
                            ?>

                                    <a href="?message=<?= $IdUnikMessage ?>" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                                        <div class="d-flex gap-3 w-100 justify-content-between">
                                            <div>
                                                <h6 class="mb-0">
                                                    <?= $globally_appeal_Type ?>
                                                </h6>
                                                <div class="com_coob">
                                                    <p class="mb-0 opacity-75 d-inline-block text-truncate" style="width:360px;">
                                                        <?= $message['Appeal'] ?>
                                                    </p>
                                                </div>
                                            </div>
                                            <small class="opacity-50 text-nowrap">
                                                <?= substr($message['Date'], 5,  11) ?>
                                            </small>
                                            <div class="mb-0 text-nowrap">
                                                <div class="<?= $Nclass ?>">
                                                    <?= $Necessity ?>
                                                </div>
                                                <div class="opacity-75">
                                                    <div class="com_stat">в обработке</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                            <?php
                                    array_push($stack, $IdAppeal);
                                    }
                                    $message = $resultMessage->fetch_assoc();                                 
                                }
                            }


                            $admin_panel = $mysql->query("SELECT * FROM `admin-panel`");
                            $admin_arr = $admin_panel->fetch_assoc();
                            $admin_id = $admin_arr['IdAdmin'];
                            $admin_nickname = $admin_arr['nickname'];

                            $resultMessage = $mysql->query("SELECT * FROM `message` 
            WHERE `IdUser` = '$userID' AND `IdUniqueApplication` = '$IdUnikMessage' ORDER BY `id`");

                            $message = $resultMessage->fetch_assoc();








                            $IdAppeal = $_GET['message'];
                            $globally_appeal = $mysql->query("SELECT * FROM `globally-appeal` 
                            WHERE `IdAppeal` = '$IdAppeal' ");
                            $globally_appeal = $globally_appeal->fetch_assoc();
                            $globally_appeal_Division =  $globally_appeal['Division'];
                            $globally_appeal_Type =      $globally_appeal['Type'];
                            $globally_appeal_Necessity = $globally_appeal['Necessity'];
                            $globally_appeal_IdAppeal =  $globally_appeal['IdAppeal'];
                            if ($globally_appeal_Necessity == "1") {
                                $Necessity = "Не срочно";
                                $Nclass = "com_vaj1";
                            } else if ($globally_appeal_Necessity == "2") {
                                $Necessity = "Важно";
                                $Nclass = "com_vaj2";
                            } else if ($globally_appeal_Necessity == "3") {
                                $Necessity = "Экстренно";
                                $Nclass = "com_vaj3";
                            }
                            $IdUnikMessage = $IdAppeal; 
                            ?>

                        </div>

                    </div>
                </div>
            </div>
            <!--Сообщения-->
            <div class="start-right-Mess-SUPER">
                <div class="start-right-Mess">
                    <div class="start-rieght">
                        <div class="top_nazvan" style="display:flex;">
                            <div>Выбранное обращение</div>
                            <?php
                            if ($IdUnikmes == '') { //Если пользователем ещё не вибранно ни одно сообщение
                                $mysql->close();
                            }
                            else{
                            ?>
                            <div class="<?= $Nclass ?>" style="margin: 0 10px 0 auto;">
                                <?= $Necessity ?>
                            </div>
                            <div class="opacity-75">
                                <div class="com_stat" style="margin: 0 0 0 10px;">в обработке</div>
                            </div>
                            <?php
                            }
                            ?>
                           
                        </div>
                        <div class="top_nazvan_4"><?=$globally_appeal_Division?></div>
                        <div class="start-right_pl2">
                            <div id="scrolVnizJs" class="scroll2">
                                <div class="list-group">









                                    <?php

                                    if ($message === null) { //Если нет ни одного сообщения от пользователя в бд
                                        $mysql->close();
                                        echo '   
   <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
   <div class="d-flex gap-3 w-100 justify-content-between">
       <div>
           <h6 class="mb-10" style="font-size: 200%;">У вас ещё нет ни одного обращения</h6>
       </div>   
       <div class="mb-0 text-nowrap">    
       </div>
   </div>
</a>
   ';
                                    } else if ($IdUnikmes == '') { //Если пользователем ещё не вибранно ни одно сообщение
                                        $mysql->close();
                                        echo '   
<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
<div class="d-flex gap-3 w-100 justify-content-between">
<div>
<h6 class="mb-10" style="font-size: 140%;padding-left:10px;"> Выберете обращение что бы прочитать переписку</h6>
</div>   
<div class="mb-0 text-nowrap">    
</div>
</div>
</a>
';
                                    } else { //Если сообщения всё же есть в бд
                                        $NSPid = $message['IdUser'];
                                        $NSPname = $mysql->query("SELECT * FROM `user` 
    WHERE `id` = '$NSPid'");
                                        $NSPname = $NSPname->fetch_assoc();
                                        $NSPname = $NSPname['SName'] . " " . $NSPname['Name'] . " " . $NSPname['PName'];
                                            
                                            $resultMessage = $mysql->query("SELECT * FROM `message` 
                                            WHERE `IdUser` = '$userID' AND `IdUniqueApplication` = '$IdUnikMessage' ORDER BY `id`");
                                            $message = $resultMessage->fetch_assoc();
                                        while ($message !== null) {
                                
                                                          
                                    ?>

                                            <!--Начало сообщения-->
                                            <div class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                                                <div class="d-flex gap-3 w-100 justify-content-between">
                                                    <div>
                                                        <?php
                                                        if ($message['IdSenderMessage'] == $admin_id) { ?>
                                                            <h6 class="mb-0"><?= $admin_nickname ?> <small class="opacity-50 text-nowrap">
                                                                    <?= substr($message['Date'], 5,  11) ?>
                                                                </small></h6>
                                                        <?php } else { ?>
                                                            <h6 class="mb-0" style="display:flex;">
                                                                <div style="margin-left: auto;"> <small class="opacity-50 text-nowrap">
                                                                        <?= substr($message['Date'], 5,  11) ?>
                                                                    </small> <?= $NSPname  ?> </div>
                                                            </h6>
                                                        <?php }
                                                        ?>


                                                        <div>
                                                            <p class="mb-0 opacity-75 d-inline-block " style="width:565px;">
                                                                <?= $message['Appeal'] ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="mb-0 text-nowrap">

                                                    </div>
                                                </div>
                                            </div>
                                            <!--Конец сообщения-->


                                    <?php
                                            $message = $resultMessage->fetch_assoc();                                        
                                        }
                                    }
                                    $mysql->close();
                                    ?>




                                </div>
                            </div>
                            <form action="Nextnewmessage.php?Ne=<?=$globally_appeal_Necessity?>&Ty=<?=$globally_appeal_Type?>&Di=<?=$globally_appeal_Division?>&In=<?=$globally_appeal_IdAppeal?>&ir=<?=$NSPid?>" method="post">
                                <div style="display:flex;">
                                    <input type="text" name="input"  id="input" class="shadow-sm mb-1 bg-white rounded" style="border: none; width: 90%;padding: 10px; margin-top:2px;" placeholder="Напишите сообщение...">
                                    <button id="input_btn" type="submit" class="shadow-sm mb-1 bg-white rounded" style="border: none; width: 50px; height: 50px; margin-left: 10px;margin-top:10px;">
                                        <img src="../sam.png" style="width: 30px; height: 30px; ">
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-12 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    +
                </a>
                <span class="text-muted">© 2022 Официальный сайт для подачи заявок, при неисправностях.</span>
            </div>
        </footer>
    </div>

    <script type="text/javascript">
        var block = document.getElementById("scrolVnizJs");
        block.scrollTop = block.scrollHeight;



var input = document.getElementById("input");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("input_btn").click();
  }
});
</script>
</body>

</html>