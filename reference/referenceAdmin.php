<?php

$login = $_COOKIE['l1'];
$password = $_COOKIE['p1'];


require $_SERVER['DOCUMENT_ROOT'].'/MySQL/connectSQL.php';

$result = $mysql->query("SELECT * FROM `user` 
WHERE `Login` = '$login' 
AND `Password` = '$password'");
$user=$result->fetch_assoc();


$userID=$user['id'];
//Если пользователь успешно зашёл



$adminPanelIDproverka = $mysql->query("SELECT * FROM `admin-panel`");
$adminid=$adminPanelIDproverka->fetch_assoc();
$mysql->close();
if($adminid['IdAdmin']==$userID){
    //Открываем страницу админа. Не блокируем доступ к странице, если это админ.
}
else{
     //Чел не админ, ему сюда нельзя.
      exit();
}
?>







































<!DOCTYPE html>
<html>

<head>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Редактировать профиль</title>
    <!-- Заявки,  Профиль, -->
    <meta name='viewport'>

    <!--Начало стилей редактора профиля-->
    <link rel='stylesheet' type='text/css' media='screen' href='..\main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='..\programming profil.css'>
    <script src='..\main.js'></script>

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
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--Конец стилей редактора профиля-->




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
    <link rel='stylesheet' type='text/css' media='screen' href='../main_mobile.css'>
</head>

<body>

    <form action="../MySQL/ProfilEdit.php" method="post">
        <div class="start">
            <!--Этот див тебе не нужен-->
            <div style="width: 100%;   ">
                <!--Этот див тебе не нужен-->
                <!-- Шапка-->
                <div class="costil12">
                    <header class="p-2 bg-dark text-white">
                        <div class="container">
                            <div id="costil2" class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                                <a href="/" id="costil4" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                                    <img src="../eding4.jpg" class="img_shapka">
                                </a>
                                <ul id="costil" class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                                    <li class="mobbail_shapka"><a href="/" class="nav-link px-2 text-white"> Оставить заявку</a></li>
                                    <li class="mobbail_shapka" id="sh_mobbail"><a href="/MySQL/NewOldNewMessageMobile.php" class="nav-link px-2 text-white"> Сообщения </a></li>
                                    <!--//для телефона-->
                                    <li class="mobbail_shapka" id="sh_pk"><a href="/MySQL/NewOldNewMessage.php" class="nav-link px-2 text-white"> Сообщения </a></li>
                                    <!--//для пк-->
                                    <li class="mobbail_shapka"><a href="/reference" class="nav-link px-2 text-secondary" id="spravka_shapka"> Справка </a></li>
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
                                                    <img src="../avatar.jpg" class="exit" alt="Ваш аватар не смог загрузиться. Попробуйте загрузить новое фото, если проблемма не исчезнет со временем.">
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





            <!--Включить ссылки админа-->
            <a href="?reference=0#here" ><h4><button type="button" class="btn btn-outline-dark btn-lg">• Справка для сисадмина</button></h4></a>    

            <a href="<?=$a?>edit"><h4> <button type="button" class="btn btn-outline-dark btn-lg">• Редактор справок</button></h4></a>  

            <br><br><hr><br>
            <!--Выключить ссылки админа-->








































        <?php
                    require $_SERVER['DOCUMENT_ROOT'].'/MySQL/connectSQL.php';                                  

                ?>

<!--Начало важного контенера-->
                <div id="result_form">
             
                    <?php 
                    
                    $stack=0;
                        
                    $res = $mysql->query("SELECT * FROM `reference` WHERE `open` = 1");//Если справка открыта true
                    $stack=0;
                    $res_ar=$res->fetch_assoc();      
                    if($res_ar===null){ //Если справок нет ?>
                        <div style="margin-bottom: 10px; font-size:18px;">
                        Мы ничего не нашли. Похоже, что ещё нет ни одной справки.
                        </div>                        
                        <?php require $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; ?>
                        </body></html>
                        <?php exit();
                    }
                    while($res_ar!==null){  
                        $idres=$res_ar['id']; 
                    $nameref=$res_ar['name'];
                    $ssilkaref=$res_ar['ssilka'];  
                    $s_true=$res_ar['s_true'];    
                    $openref=$res_ar['open']; 
                    if($s_true=="0"||$s_true===null){
                        ?>
                        <a href="?reference=<?=$idres?>#here"><h4><?=$nameref?></h4></a> 
                       
                        <?php   
                    }
                    else{                       
                        ?>
                        <a href="<?= $ssilkaref?>"><h4><?=$nameref?></h4></a> 
                       
                        <?php  
                    }
                        $res_ar=$res->fetch_assoc();         
                        $stack++;
                    }
                    $idreference=$_GET['reference'];
                    if($idreference!==null){
                        


























                   






                    

             
                    $IdRef=$idreference;
                    
                    $res = $mysql->query("SELECT * FROM `reference` WHERE `reference`.`id` = $IdRef AND `open` = 1");
                    $res=$res->fetch_assoc(); 
                    
                    $idres=$res['id']; 
                    $nameref=$res['name'];
                    $ssilkaref=$res['ssilka'];    
                    $openref=$res['open'];    
                    //Если спрака конкретная, то мы уже знаем результат
                   

                ?>

<!--Начало важного контенера-->
                <div id="result_form">
                <h4 id="here" style="margin-top: 70px;"><?= $nameref?></h4>    
                    <?php 
                    
                    $stack=0;
                        $refcontent = $mysql->query("SELECT * FROM `reference-fields` WHERE `IdReference`='$IdRef' ORDER BY id");
                        $ref=$refcontent->fetch_assoc();      
                        while($ref!==null){
                            $id = $ref['id'];                            
                            $IdReference = $ref['IdReference'];
                            $type = $ref['type'];
                            $text = $ref['text'];
                           

                            if($type==1){?>
                            <p style="margin-left: 20px; font-size:120%;"><?=$text?></p>
                            <?php  
                            
                        } elseif($type==2){?>
                            <div  class="class_img_reference">
                                <img src="img/<?=$text?>" class="img_reference_small" >                   
                            </div>
                            <?php 
                
                        } elseif($type==3){?>
                            <div  class="class_img_reference">
                                <div style="display:flex; justify-content: center;margin-bottom: 20px;">
                                <?=$text?>
                                </div>
                            </div>
                            <?php  
    
                        } elseif($type==4){?>
                            <div  class="class_img_reference">
                                <img src="img/<?=$text?>" class="img_reference" >                   
                            </div>
                            <?php 
                
                        }




                            $ref=$refcontent->fetch_assoc();  
                            $stack++;
                        } 
                    }
                        ?>
                </div>
<!--Конец важного контенера-->




                </div>
<!--Конец важного контенера-->
            </div>
        </div>
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; ?>
    </form>
</body>
</html>
<?php
exit();
?>