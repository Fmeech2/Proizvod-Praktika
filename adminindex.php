<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Оставить заявку</title>
    <!--Регистрация, Заявки, Новые заявки, Профиль, -->
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

    <div class="start" style="    background-color: rgba(0, 0, 0, 0.062);   min-height: 1000px;">
        <!--Этот див тебе не нужен-->
        <div style="width: 100%;  display: flex;flex-wrap: wrap; margin-bottom: auto; ">
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
                                <li class="mobbail_shapka"><a href="/" class="nav-link px-2 text-secondary"> Панель управления</a></li>
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
            <div class="costil30">
                <div class="start-left-admin-panel">
               
                    <div class="top_zaiv2">
                        Изменить настройки
                    </div>
                 <h4 class="costil31">Глобальные настройки</h4>
                 <form action="MySQL\newDivision.php" method="post">
                    <div class="sel_class_admin">
                    <label class="costil32" for="exampleFormControlTextarea1"> Выберите, что бы удалить подразделение</label>
                        <select name="Division" class="form-select form-select-sm" aria-label=".form-select-lg example" id="selectIDadmin">
                            <option value="death" selected>Выберите подразделение</option>
                            <?php
                            require $_SERVER['DOCUMENT_ROOT'].'/MySQL/connectSQL.php';
                            $resultDivision = $mysql->query("SELECT * FROM `division`");
                            $Division=$resultDivision->fetch_assoc();
                            while($Division!=''){?>
                            <option value="<?=$Division['Division']?>"><?=$Division['Division']?></option>
                            <?php
                                $Division=$resultDivision->fetch_assoc();
                            }
                            ?>                      
                        </select>
                    </div>                    
                    <div class="form_problem">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" class="costil34"> Добавить подразделение</label>
                            <div class="costil35">
                            <textarea name="Appeal" placeholder="Название нового подразделения для добавления." class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                            </div>
                        </div>
                    </div>

                    <div style="display: flex;">
                    <div class="form_btn_div">
                        <div class="form_btn_a_admin">
                            <button name="yes" type="submit" class="btn btn-secondary " id="costil36">Добавить</button>
                        </div>
                        <input type="text" value="1" style="width: 0px; height:0px;border:none; margin: 0;padding: 0;">
                    </div>
                    <div class="form_btn_div">
                        <div class="form_btn_a_admin">
                            <button name="no" type="submit" class="btn btn-outline-danger " id="costil36">Удалить</button>
                        </div>
                        <input type="text" value="1" style="width: 0px; height:0px;border:none; margin: 0;padding: 0;">
                    </div>
                    </div>
                    </form>


                    <form action="MySQL\newType.php" method="post">
                    <div class="sel_class2_admin">
                    <label class="costil32" for="exampleFormControlTextarea1"> Выберите, что бы удалить Тип обращения</label>
                        <select  name="Type" class="form-select form-select-sm" aria-label=".form-select-sm example" id="selectID2admin">
                            <option value="death" selected>Выберите Тип обращения</option>
                            <?php                        
                            $resultType = $mysql->query("SELECT * FROM `type`");
                            $Type=$resultType->fetch_assoc();
                            while($Type!=''){?>
                            <option value="<?=$Type['Type']?>"><?=$Type['Type']?></option>
                            <?php
                                $Type=$resultType->fetch_assoc();
                            }
                            ?>   
                        </select>
                    </div>

                    <div class="form_problem">
                        <div class="form-group">
                            <label class="costil32" for="exampleFormControlTextarea1"> Добавить тип обращения</label>
                            <div class="costil35">
                            <textarea name="Appeal" placeholder="Название нового типа обращения для добавления." class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                            </div>
                        </div>
                    </div>

                    <div style="display: flex;">
                    <div class="form_btn_div">
                        <div class="form_btn_a_admin">
                            <button name="yes" type="submit" class="btn btn-secondary " id="costil36">Добавить</button>
                        </div>
                        <input type="text"  value="1" style="width: 0px; height:0px;border:none; margin: 0;padding: 0;">
                    </div>
                    <div class="form_btn_div">
                        <div class="form_btn_a_admin">
                            <button name="no" type="submit" class="btn btn-outline-danger " id="costil36">Удалить</button>
                        </div>
                        <input type="text" value="1" style="width: 0px; height:0px;border:none; margin: 0;padding: 0;">
                    </div>
                    </div>
                    </form>
<hr>
<form action="MySQL\savesettings.php" method="post">
<?php

$adm = $mysql->query("SELECT * FROM `admin-panel`");
$admResult =$adm->fetch_assoc();

$SecretKey = $admResult['SecretKey'];
$ProgramEail = $admResult['ProgramEail'];
$nickname = $admResult['nickname'];
$Policy = $admResult['UserАgreement'];
$SendingByMail=$admResult['SendingByMail'];
?>
<label style="margin-left: 20px;"> <h4 class="costil32">Индивидуальные настройки</h4></label>
                    <div class="form_problem">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" class="costil32"> Изменить никнейм</label>
                            <div class="costil35">
                            <textarea name="nickname" placeholder="Пользователи будут видеть то имя которое вы напишете сюда." class="form-control" id="exampleFormControlTextarea1" rows="1"><?=$nickname?></textarea>
                        </div>
                        </div>
                    </div>

                    <style>
                    .password {
	position: relative;
}

</style>
<script>
    function show_hide_password(target){
	var input = document.getElementById('password-input');
	if (input.getAttribute('type') == 'password') {
		target.classList.add('view');
		input.setAttribute('type', 'text');
	} else {
		target.classList.remove('view');
		input.setAttribute('type', 'password');
	}
	return false;
}
</script>
                    <div class="form_problem">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" class="costil32"> Редактировать секретный код</label>
                            <div class="password">
                                <div class="cpstil32">
                            <input name="SecretKey" type="password" placeholder="Код любой длинны нужный пользователю при регистрации." class="form-control" id="password-input"  value="<?=$SecretKey?>">
                            </div>
                            <a href="#" class="password-control" onclick="return show_hide_password(this);"></a>
                        </div>
                        </div>
                    </div>
<style>
    @media (max-width:1279px){
    #pillNav2{     
    font-size: 500%;

    }
}
</style>
                    <div class="form_radio">
                    <label class="costil32" for="exampleFormControlTextarea1"> О каких событиях отправлять уведомления на почту?</label>
                        <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-white border rounded-5 shadow-sm" id="pillNav2" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link rounded-5 <?php if($SendingByMail==1)echo "active";?>" id="home-tab2" data-bs-toggle="tab" type="button" role="tab" onclick="jsNecessity(1)" aria-selected="true">Только о новых заявках</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link rounded-5 <?php if($SendingByMail==2)echo "active";?>" id="profile-tab2" data-bs-toggle="tab" type="button" role="tab" onclick="jsNecessity(2)" aria-selected="false" tabindex="-1">О всех новых сообщениях</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link rounded-5 <?php if($SendingByMail==3)echo "active";?>" id="profile-tab3" data-bs-toggle="tab" type="button" role="tab" onclick="jsNecessity(3)" aria-selected="false" tabindex="-1">Не о каких</button>
                            </li>
                        </ul>
                    </div>

                    <div class="form_problem">
                        <div class="form-group">
                            <label class="costil38" for="exampleFormControlTextarea1"> Политика конфиденциальности</label>
                            <textarea name="Policy" placeholder="На всякий случай на сайте есть место для политики конфиденциальности." class="form-control" id="exampleFormControlTextarea24" rows="2"><?=$Policy?></textarea>
                        </div>
                    </div>

                    <div class="form_btn_div">
                        <div class="form_btn_a">
                            <button type="submit" class="btn btn-danger" style="color: white;" id="costil37">Сохранить все индивидуальные настройки</button>
                        </div>
                        <input type="text" name="Necessity" id="Necessity" value="<?=$SendingByMail?>" style="width: 0px; height:0px;border:none; margin: 0;padding: 0;">
                    </div>
</form>
                </div>
            </div>
            <!--Оставить заявку-->  



            <!--Сообщения-->
            <div class="start-right">
                <div class="top_nazvan">Полученные обращения</div>
                <div class="start-right_pl">
                    <div class="scroll">
                        <div class="list-group">



<?php

$resultMessage = $mysql->query("SELECT * FROM `message` ORDER BY `id` DESC");

$message=$resultMessage->fetch_assoc();

if($message===null){//Если нет ни одного сообщения от пользователя в бд
    $mysql->close();
   echo'   
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
}
else{//Если сообщения всё же есть в бд
   
    $stack = array("0");
                               
                           

    while ($message !== null) {
        $IdAppeal = $message['IdUniqueApplication'];
 
       if(!in_array($IdAppeal, $stack)){
        $globally_appeal = $mysql->query("SELECT * FROM `globally-appeal` 
        WHERE `IdAppeal` = '$IdAppeal' ");
        $globally_appeal = $globally_appeal->fetch_assoc();
        $globally_appeal_Division=  $globally_appeal['Division'];
        $globally_appeal_Type=      $globally_appeal['Type'];
        $globally_appeal_Necessity= $globally_appeal['Necessity'];
        $globally_appeal_IdAppeal=  $globally_appeal['IdAppeal'];
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
        if($globally_appeal_Necessity=="1"){
            $Necessity="Не срочно";
            $Nclass="com_vaj1";
        }
        else if($globally_appeal_Necessity=="2"){
            $Necessity="Важно";
            $Nclass="com_vaj2";
        }
        else if($globally_appeal_Necessity=="3"){
            $Necessity="Экстренно";
            $Nclass="com_vaj3";
        }
        $IdUnikMessage=$message['IdUniqueApplication'];
        ?>
  
    <a href="MySQL\NewOldNewMessage.php?message=<?=$IdUnikMessage?>" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
    <div class="d-flex gap-3 w-100 justify-content-between">
        <div>
            <h6 class="mb-0"><?=$globally_appeal_Type?></h6>
            <div class="com_coob">
                <p class="mb-0 opacity-75 d-inline-block text-truncate" style="width:360px;">
                <?=$message['Appeal']?>
            </p>
            </div>
        </div>
        <small class="opacity-50 text-nowrap"> <?=substr($message['Date'], 11,  5)." ".substr($message['Date'], 8,  2).".".substr($message['Date'], 5,  2)?></small>
        <div class="mb-0 text-nowrap">
            <div class="<?=$Nclass?>">
            <?=$Necessity?>
            </div>
            <div class="opacity-75">
                                                    <div class="<?=$NclassProcess?>"><?=$process?></div>
                                                </div>
        </div>
    </div>
</a>

<?php     
 array_push($stack, $IdAppeal);
                                    }
$message=$resultMessage->fetch_assoc();
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
    <?php require $_SERVER['DOCUMENT_ROOT'].'/footer.php'; ?>


</body>

</html>