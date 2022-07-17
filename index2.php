<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Оставить заявку</title>
    <!--Регистрация, Заявки, Новые заявки, Профиль, -->
    <meta name="viewport">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='programming index.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src='main.js'></script>

    <!-- Только CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Пакет JavaScript с Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel='stylesheet' type='text/css' media='screen' href='main_mobile.css'>
</head>

<body>

    <div class="start" style="    background-color: rgba(0, 0, 0, 0.062);  ">
        <!--Этот див тебе не нужен-->
        <div class="capsyla2">
            <!--Этот див тебе не нужен-->
            <!-- Шапка-->
            <div style="margin-bottom: 70px; width:100%;">
                <header class="p-2 bg-dark text-white">
                    <div class="container">
                        <div id="costil2" class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                            <a href="/" id="costil4" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                                <img src="eding4.jpg" class="img_shapka">
                            </a>
                            <ul id="costil" class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                                <li class="mobbail_shapka"><a href="/" class="nav-link px-2 text-secondary"> Оставить заявку</a></li>
                                <li class="mobbail_shapka" id="sh_mobbail"><a href="/MySQL/NewOldNewMessageMobile.php" class="nav-link px-2 text-white"> Сообщения </a></li>
                                <!--//для телефона-->
                                <li class="mobbail_shapka" id="sh_pk"><a href="/MySQL/NewOldNewMessage.php" class="nav-link px-2 text-white"> Сообщения </a></li>
                                <!--//для пк-->
                                <li class="mobbail_shapka"><a href="/reference" class="nav-link px-2 text-white" id="spravka_shapka"> Справка </a></li>
                                <li class="mobbail_shapka" id="sh_pk"><a href="/profil" class="nav-link px-2 text-white"> Редактировать профиль </a></li>
                            </ul>

                            <div class="text-end">
                                <form action="/MySQL/end.php" method="post" class="flex_shapka">
                                    <a class="a" href="/profil">
                                        <button type="submit" class="btn btn-outline-light me-2" id="costil3">
                                            <div class="btn_shapka">Выйти из профиля</div>
                                        </button>
                                    </a>
                                    <button type="button" class="btn">
                                        <a class="a" href="/profil">
                                            <div>
                                                <img src="avatar.jpg" class="exit" alt="Ваш аватар не смог загрузиться. Попробуйте загрузить новое фото, если проблемма не исчезнет со временем.">
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

            <!--Оставить заявку-->
            <div class="capsyla">
                <div class="start-left2">
                    <form action="MySQL\NewMessage.php" method="post" id="FormIdMess">
                        <div class="top_zaiv">
                            Оставить заявку
                        </div>

                        <div class="sel_class">
                            <select name="Division" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="selectID">
                                <option value="death" selected>Выберите подразделение</option>
                                <?php
                                require $_SERVER['DOCUMENT_ROOT'] . '/MySQL/connectSQL.php';
                                $resultDivision = $mysql->query("SELECT * FROM `division`");
                                $Division = $resultDivision->fetch_assoc();
                                while ($Division != '') { ?>
                                    <option value="<?= $Division['Division'] ?>"><?= $Division['Division'] ?></option>
                                <?php
                                    $Division = $resultDivision->fetch_assoc();
                                }
                                ?>
                            </select>
                        </div>

                        <div class="sel_class2">
                            <select name="Type" class="form-select form-select-sm" aria-label=".form-select-sm example" id="selectID2">
                                <option value="death" selected>Выберите тип обращения</option>
                                <?php
                                $resultType = $mysql->query("SELECT * FROM `type`");
                                $Type = $resultType->fetch_assoc();
                                while ($Type != '') { ?>
                                    <option value="<?= $Type['Type'] ?>"><?= $Type['Type'] ?></option>
                                <?php
                                    $Type = $resultType->fetch_assoc();
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form_radio">
                            <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-white border rounded-5 shadow-sm" id="pillNav2" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link rounded-5 active" id="home-tab2" data-bs-toggle="tab" type="button" role="tab" onclick="jsNecessity(1)" aria-selected="true">Не срочно</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link rounded-5" id="profile-tab2" data-bs-toggle="tab" type="button" role="tab" onclick="jsNecessity(2)" aria-selected="false" tabindex="-1">Важно</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link rounded-5" id="contact-tab2" data-bs-toggle="tab" type="button" role="tab" onclick="jsNecessity(3)" aria-selected="false" tabindex="-1">Экстренно</button>
                                </li>
                            </ul>
                        </div>

                        <div class="form_problem">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1" id="exampleFormControlTextarea14"> Опишите вашу проблему</label>
                                <textarea name="Appeal" placeholder="Нажмите здесь что бы начать писать обращение. 

Не переживайте, если что-то забудете, в последствии можно будет дополнить ваше обращение." class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                            </div>
                        </div>

                        <div class="form_btn_div">
                            <div class="form_btn_a">
                                <button type="button" onclick="checkMess()" class="btn btn-secondary " id="btn_costil">Отправить</button>
                            </div>
                            <input type="text" name="Necessity" id="Necessity" value="1" style="width: 0px; height:0px;border:none; margin: 0;padding: 0;">
                        </div>
                    </form>
                </div>
            </div>
            <script>
                function checkMess() {

                    if (document.getElementById('selectID').value == "death")
                        alert("Выберите подразделение");

                    else if (document.getElementById('selectID2').value == "death")
                        alert("Выберите тип обращения");

                    else if (document.getElementById('exampleFormControlTextarea1').value == '')
                        alert("Опишите свою проблемму в обращении. Сейчас оно у вас пустое.");

                    else {
                        var myform = document.getElementById("FormIdMess");
                        myform.submit();
                    }
                }
            </script>
            <!--Оставить заявку-->


            <!--Сообщения-->
            <div class="start-right">
                <div class="top_nazvan">Ваши обращения</div>
                <div class="start-right_pl">
                    <div class="scroll">
                        <div class="list-group">



                            <?php
                            require $_SERVER['DOCUMENT_ROOT'] . '/MySQL/connectSQL.php';

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

                                    if (!in_array($IdAppeal, $stack)) {
                                        $globally_appeal = $mysql->query("SELECT * FROM `globally-appeal` 
        WHERE `IdAppeal` = '$IdAppeal' ");
                                        $globally_appeal = $globally_appeal->fetch_assoc();
                                        $globally_appeal_Division =  $globally_appeal['Division'];
                                        $globally_appeal_Type =      $globally_appeal['Type'];
                                        $globally_appeal_Necessity = $globally_appeal['Necessity'];
                                        $globally_appeal_IdAppeal =  $globally_appeal['IdAppeal'];
                                        $globally_appeal_process =   $globally_appeal['process'];
                                        if ($globally_appeal_process == "1") {
                                            $process = "в обработке";
                                            $NclassProcess = "com_stat1";
                                        } else if ($globally_appeal_process == "2") {
                                            $process = "завершено";
                                            $NclassProcess = "com_stat2";
                                        } else if ($globally_appeal_process == "3") {
                                            $process = "отменено";
                                            $NclassProcess = "com_stat3";
                                        }
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

                                        <a href="MySQL\NewOldNewMessage.php?message=<?= $IdUnikMessage ?>" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                                            <div class="d-flex gap-3 w-100 justify-content-between">
                                                <div>
                                                    <h6 class="mb-0"><?= $globally_appeal_Type ?></h6>
                                                    <div class="com_coob">
                                                        <p class="mb-0 opacity-75 d-inline-block text-truncate" style="width:360px;">
                                                            <?= $message['Appeal'] ?>
                                                        </p>
                                                    </div>
                                                </div>
                                                <small class="opacity-50 text-nowrap"> <?= 
substr($message['Date'], 11,  5)." ".substr($message['Date'], 8,  2).".".substr($message['Date'], 5,  2)
                                                ?></small>
                                                <div class="mb-0 text-nowrap">
                                                    <div class="<?= $Nclass ?>">
                                                        <?= $Necessity ?>
                                                    </div>
                                                    <div class="opacity-75">
                                                        <div class="<?= $NclassProcess ?>"><?= $process ?></div>
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
                            $mysql->close();
                            ?>



                        </div>


                    </div>
                </div>
            </div>
            <!--Сообщения-->
        </div>
    </div>
    <?php
    require $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
    ?>


</body>

</html>