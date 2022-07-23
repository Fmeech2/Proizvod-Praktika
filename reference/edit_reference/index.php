<?php

$login = $_COOKIE['l1'];
$password = $_COOKIE['p1'];


require $_SERVER['DOCUMENT_ROOT'] . '/MySQL/connectSQL.php';

$result = $mysql->query("SELECT * FROM `user` 
WHERE `Login` = '$login' 
AND `Password` = '$password'");
$user = $result->fetch_assoc();


$userID = $user['id'];
//Если пользователь успешно зашёл



$adminPanelIDproverka = $mysql->query("SELECT * FROM `admin-panel`");
$adminid = $adminPanelIDproverka->fetch_assoc();
$mysql->close();
if ($adminid['IdAdmin'] == $userID) {
    //Открываем страницу админа. Не блокируем доступ к странице, если это админ.
} else {
    //Чел не админ, ему сюда нельзя.
    exit();
}
?>




































<?php 
                $IdRef = $_GET['id'];
                if($IdRef=="new"){
                    require $_SERVER['DOCUMENT_ROOT'].'/MySQL/connectSQL.php';

$mysql->query("INSERT INTO `reference` 
(`id`, `name`, `ssilka`, `open`) 
VALUES (NULL, NULL, NULL, NULL)");

header('Location: /reference/edit_reference?id=end');
                }



                else{
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
    <title>Редактор справок</title>
    <!-- Заявки,  Профиль, -->
    <meta name='viewport'>

    <!--Начало стилей редактора профиля-->
    <link rel='stylesheet' type='text/css' media='screen' href='..\..\main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='..\..\programming profil.css'>
    <script src='..\..\main.js'></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Только CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Пакет JavaScript с Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css" rel="stylesheet">
    <!-- Раньше здесь был джейквекри 3.2.1 -->
    <!--Конец стилей редактора профиля-->


    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='programming index.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Только CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Пакет JavaScript с Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



    <link rel='stylesheet' type='text/css' media='screen' href='../../main_mobile.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="ajax.js"></script>
    <script>
    function textAreaAdjust(element) {
    element.style.height = "1px";
    element.style.height = (25+element.scrollHeight)+"px";}
    </script>
    
</head>

<body>

 
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
                                    <img src="../../eding4.jpg" class="img_shapka">
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
                                                    <img src="../../avatar.jpg" class="exit" alt="Ваш аватар не смог загрузиться. Попробуйте загрузить новое фото, если проблемма не исчезнет со временем.">
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
                <?php
                    require $_SERVER['DOCUMENT_ROOT'].'/MySQL/connectSQL.php';

                    //Если новая справка, узнаём айди последней справки
                    if($IdRef=="end"){
                    $result = $mysql->query("SELECT * FROM `reference` ORDER BY `reference`.`id` DESC LIMIT 1");
                    $IdRef=$result->fetch_assoc();  
                    $IdRef=$IdRef['id'];
                    }
                    $res = $mysql->query("SELECT * FROM `reference` WHERE `reference`.`id` = $IdRef");
                    $res=$res->fetch_assoc(); 
                    if($res===null){ ?>
                    <div style="margin-bottom: 10px; font-size:18px;">
                    Мы ничего не нашли. Такой справки нет. Попробуйте открыть другую или создать новую, потому что возможно она была удалена.
            </div>
                    <a href="?id=new"><h4><button type="button" class="btn btn-outline-dark btn-lg">Создать новую справку</button></h4> </a>  
                        </div></div>
                        <?php require $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; ?>
                        </body></html>
                        <?php exit();
                    }
                    $idres=$res['id']; 
                    $nameref=$res['name'];
                    $ssilkaref=$res['ssilka'];    
                    $openref=$res['open'];    
                    //Если спрака конкретная, то мы уже знаем результат
                   

                ?>

<!--Начало важного контенера-->
                <div id="result_form">
                <div>
                        <div style="display: flex;flex-wrap:wrap; margin-bottom: 20px; width:100%; position: relative;">
                            <form  action="Save_name.php?id=<?=$id?>&messId=<?=$IdRef?>" method="POST" enctype="multipart/form-data" style="display: flex;flex-wrap:wrap; width:100%">
                                  
                                <input name="intext"  class="costil50" value="<?=$nameref?>" placeholder="* Название новой справки">                     
                                <button type="submit" class="btn btn-outline-success btn" id="costil51">Сохранить новое название справки</button>
                                 
                            </form>  
                        </div>
                    </div>   
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
                    <div>
                        <div style="display: flex;flex-wrap:wrap; margin-bottom: 20px; width:100%; position: relative;">
                            <form  action="edit_abzats.php?id=<?=$id?>&messId=<?=$IdRef?>" method="POST" enctype="multipart/form-data" style="display: flex;flex-wrap:wrap; width:100%">
                                  
                                <textarea name="intext" onkeyup="textAreaAdjust(this)" onclick="textAreaAdjust(this)" class="costil60"><?=$text?></textarea>                        
                                <button type="submit" class="btn btn-outline-success btn-sm" id="costil61">Сохранить абзац</button>
                                 
                            </form>  
                            <form action="delit_img.php?id=<?=$id?>&messId=<?=$IdRef?>" method="POST" style="  position: absolute; bottom: 0;left:150px;">
                                <button type="submit" class="btn btn-outline-danger btn-sm" id="costil62">Удалить абзац</button>
                            </form>
                        </div>
                    </div>   



                            <?php  }
                            elseif($type==2){?>
                    <div  class="costil66">
                        <img src="../img/<?=$text?>" class="img_reference_small">
                        <div style="display: flex;margin-bottom: 20px; flex-wrap:wrap;">
                        <form  action="edit_img.php?id=<?=$id?>&messId=<?=$IdRef?>" method="POST" enctype="multipart/form-data"  class="costil66">
                            <div style="display: flex; flex-wrap:wrap;" class="costil66">
                                <input type="file" name="img_otpravka"  class="costil63"><br> 
                                <button type="submit" class="btn btn-outline-success btn-sm"  id="costil64" >Сохранить картинку</button>                               
                            </div>  
                        </form>                
                        <form action="delit_img.php?id=<?=$id?>&messId=<?=$IdRef?>" method="POST">
                            <button type="submit" class="btn btn-outline-danger btn-sm"  id="costil65" >Удалить картинку</button>                           
                        </form>
                        <form action="small_img.php?id=<?=$id?>&messId=<?=$IdRef?>" method="POST">
                            <button type="submit" class="btn btn-outline-danger btn-sm" id="costil64" >Изменить размер</button>                           
                        </form>
                        </div>                            
                    </div>   
                <?php }
                


                elseif($type==3){?>
        <div>
            <div style="display: flex;flex-wrap:wrap; margin-bottom: 20px; width:100%; position: relative;">
                <form  action="edit_abzats.php?id=<?=$id?>&messId=<?=$IdRef?>" method="POST" enctype="multipart/form-data" style="display: flex;flex-wrap:wrap; width:100%">
                    <div class="costil71">
                        <textarea name="intext" onkeyup="textAreaAdjust(this)" onclick="textAreaAdjust(this)" class="costil67"><?=$text?></textarea>                        
                        <button type="submit" class="btn btn-outline-success btn-sm" id="costil68">Сохранить подпись</button>
                    </div>  
                     
                </form>  
                <form action="delit_img.php?id=<?=$id?>&messId=<?=$IdRef?>" method="POST" class="costil69">
                    <button type="submit" class="btn btn-outline-danger btn-sm" id="costil70">Удалить подпись</button>
                </form>
               
            </div>
        </div>   
    <?php  }





elseif($type==4){?>
            <div class="costil66">
             <img src="../img/<?=$text?>" class="img_reference">
                        <div style="display: flex;margin-bottom: 20px; flex-wrap:wrap;">
                        <form  action="edit_img.php?id=<?=$id?>&messId=<?=$IdRef?>" method="POST" enctype="multipart/form-data"  class="costil66">
                            <div style="display: flex; flex-wrap:wrap;" class="costil66">
                                <input type="file" name="img_otpravka" class="costil63"><br> 
                                <button type="submit" class="btn btn-outline-success btn-sm" id="costil64" >Сохранить картинку</button>                               
                            </div>  
                        </form>                
                        <form action="delit_img.php?id=<?=$id?>&messId=<?=$IdRef?>" method="POST">
                            <button type="submit" class="btn btn-outline-danger btn-sm"  id="costil65" >Удалить картинку</button>                           
                        </form>
                        <form action="small_img.php?id=<?=$id?>&messId=<?=$IdRef?>" method="POST">
                            <button type="submit" class="btn btn-outline-danger btn-sm"  id="costil64" >Изменить размер</button>                           
                        </form>
                        </div>                            
                    </div>  

        
 <?php  }




                            $ref=$refcontent->fetch_assoc();  
                            $stack++;
                        }
                    ?>
                </div>
<!--Конец важного контенера-->
                <div>

         
                    
  

                </div>

                

                <div style="display: flex; flex-wrap:wrap;">
                <form id="add_new_abzats_form" class="costil53"><h4 class="costil53"><button type="button" class="btn btn-outline-dark btn-lg" id="costil52" onclick="sendAjaxForm('result_form', 'add_new_abzats_form', 'add_new_abzats.php','1','<?=0+$id?>','<?=$IdRef?>')">Добавить абзац</button></h4><input name="id" type="text" style="display: none;" value="<?=$IdRef?>"></form>
                <form id="add_new_img_form" class="costil53"><h4 class="costil53"><button type="button" class="btn btn-outline-dark btn-lg" id="costil52" onclick="sendAjaxForm('result_form', 'add_new_img_form', 'add_new_img.php','2','<?=0+$id?>','<?=$IdRef?>')">Добавить изображение</button></h4><input name="id" type="text" style="display: none;" value="<?=$IdRef?>"></form>
                <form id="add_new_small_abzats_form" class="costil53"><h4 class="costil53"><button type="button" class="btn btn-outline-dark btn-lg" id="costil52" onclick="sendAjaxForm('result_form', 'add_new_small_abzats_form', 'add_new_small_abzats.php','3','<?=0+$id?>','<?=$IdRef?>')">Добавить подпись к изображению</button></h4><input name="id" type="text" style="display: none;" value="<?=$IdRef?>"></form>
               </div>

               <?php if($openref!=3){ ?>
            <div style="display: flex;flex-wrap:wrap;">
                <form action="delit_ref.php?id=<?=$IdRef?>" style="margin-top: 50px;" id="FormIdMess" method="POST">
                    <small>* напишите слова "удалить справку", что бы подтвердить удаление</small><br>
                    <div style="display: flex;flex-wrap:wrap;">
                        <input id="selectID" type="text" placeholder="*удалить справку" class="costil54">
                            <h4><button type="button" class="btn btn-warning btn-sm" onclick="checkMess()"  id="costil55">Удалить справку</button></h4>
                    </div>
                </form>
                <?php 
                $result = $mysql->query("SELECT * FROM `reference` WHERE `id` = $IdRef");
                $result = $result->fetch_assoc();
                $open = $result['open'];
                $s_true	 = $result['s_true'];
                $ssilka = $result['ssilka'];
                ?>
                <form action="ssilka_edit.php?id=<?=$IdRef?>" method="POST" id="FormIdMess32" method="POST">
                    <input value="<?= $ssilka?>" name="ssilkatext" type="text" placeholder="* ссылка на внешний сайт" class="costil58">
                    <h4 id="costil59" ><button type="submit" class="btn btn-outline-success btn-sm" id="costil59" >Сохранить ссылку</button></h4>
                </form>
                    <form action="ssilka.php?id=<?=$IdRef?>" method="POST" style=" display:flex; width:100%;" id="FormIdMess3" method="POST">
                <?php if($s_true=null||$s_true==0)
                {?>
                    <h4 class="costil56"><button type="submit" id="costil57" class="btn btn-outline-success btn-block">Справка лежит на этом сайте</button></h4>
                    <?php
                } else{ ?>
                    <h4 class="costil56"><button type="submit"  id="costil57" class="btn btn-outline-info btn-block">Справка является ссылкой</button></h4>
                    <?php
                }?>
                </form>
                <form action="hide.php?id=<?=$IdRef?>" method="POST" style="width:100%;" id="FormIdMess2" method="POST">
                <?php 
                if($open=null||$open==0)
                {?>
                    <h4 style="width:100%;"><button type="submit" id="costil57" class="btn btn-secondary btn-block">Справка скрыта</button></h4>
                <?php }
                else
                {?>
                    <h4 style="width:100%;"><button type="submit"  id="costil57" class="btn btn-success btn-block">Справка в открытом доступе</button></h4>
                <?php }
                ?>                    
                </form>
            </div>
                <?php }?>



                <br>
                <br>
                <?php 
             }
                ?>
            </div>
        </div>
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; ?>



    
    <script>
                function checkMess() {

                    if (document.getElementById('selectID').value != "удалить справку")
                        alert("Мы ничего не удалили. Если вы действительно хотели удалить спраку, то впришите в текствое поле слова 'удалить справку'.");
                    else {
                        var myform = document.getElementById("FormIdMess");
                        myform.submit();
                    }
                }
            </script>
</body>

</html>
<?php
exit();

?>