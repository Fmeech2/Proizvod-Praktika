<?php

require $_SERVER['DOCUMENT_ROOT'].'/MySQL/connectSQL.php';
$login = $_COOKIE['l1'];
$password = $_COOKIE['p1'];
$result = $mysql->query("SELECT * FROM `user` 
WHERE `Login` = '$login' 
AND `Password` = '$password'");




$user=$result->fetch_assoc();

if($user===null){
    $mysql->close();
    setcookie('p1','',time()+60*60*24*356,"/");
    echo"Юзер не найден";
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
    <title >Редактировать профиль</title>
    <!-- Заявки,  Профиль, -->
    <meta name='viewport'>

 <!--Начало стилей редактора профиля-->
 <link rel='stylesheet' type='text/css' media='screen' href='..\main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='..\programming profil.css'>
    <script src='..\main.js'></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
            <!-- Только CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Пакет JavaScript с Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css"
        rel="stylesheet">
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


    <div class="start">
        <!--Этот див тебе не нужен-->
        <div style="width: 100%;   ">
            <!--Этот див тебе не нужен-->            
 <!-- Шапка-->
 <div class="costil12">
                <header class="p-2 bg-dark text-white">
                    <div  class="container" >
                        <div id="costil2"
                            class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                            <a href="/" id="costil4" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                                <img src="../eding4.jpg" class="img_shapka">
                            </a>
                            <ul id="costil" class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                                <li class="mobbail_shapka"><a href="/" class="nav-link px-2 text-white"> Оставить заявку</a></li>                                
                                <li class="mobbail_shapka" id="sh_mobbail"><a href="/MySQL/NewOldNewMessageMobile.php" class="nav-link px-2 text-white"> Сообщения </a></li> <!--//для телефона-->
                                <li class="mobbail_shapka" id="sh_pk"><a href="/MySQL/NewOldNewMessage.php" class="nav-link px-2 text-white"> Сообщения  </a></li>  <!--//для пк-->                                
                                <li class="mobbail_shapka"><a href="/reference" class="nav-link px-2 text-white" id="spravka_shapka"> Справка </a></li>
                                <li class="mobbail_shapka" id="sh_pk"><a href="/profil" class="nav-link px-2 text-secondary"> Редактировать профиль </a></li>
                            </ul>

                            <div class="text-end">
                                <form action="../MySQL/end.php" method="post" class="flex_shapka">
                                    <a class="a" href="/profil">
                                        <button type="submit" class="btn btn-outline-light me-2" id="costil3">
                                            <div class="btn_shapka">Выйти из профиля</div>
                                        </button>
                                    </a>
                                    <button type="button" class="btn">
                                        <a class="a" href="/profil">
                                            <div >
                                                <img src="../avatar.jpg" class="exit"
                                                    alt="Ваш аватар не смог загрузиться. Попробуйте загрузить новое фото, если проблемма не исчезнет со временем.">
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


            <div class="padding" style="margin-top: 20px;">
<a href="/" style="margin-left: 770px;"  id="costil17">
<button type="button" class="btn btn-light btn-lg" style="background-color: #d8dde2;">Назад</button>
</a>
<form action="../MySQL/ProfilEdit.php" method="post">
            <div  id="costil16">
            Редактировать профиль</div>
                <div class="row container d-flex justify-content-center ">
                    <div class="col-xl-6 col-md-12 ">
                        <div class="card user-card-full shadow mb-5 bg-white rounded" id="costil23">
                            <div class="row m-l-0 m-r-0 ">
                                <div class="col-sm-4 bg-c-lite-green user-profile ">
                                    <div class="card-block text-center text-white">
                                        <div class="m-b-25"> 
                                            <img src="../avatar.jpg" id="costil19"
                                                class="img-radius" alt="Ваш аватар не смог загрузиться. Попробуйте загрузить новое фото, если проблемма не исчезнет со временем.">
                                        </div>
                                        <h6 class="f-w-600"><a href="" style="  text-decoration: none;
                                            color: rgb(255, 255, 255);" id="costil20">Профиль</a></h6><!--Изменить аватарку-->
                                              
                                     
                                        <button style="margin-top: 30px;" type="submit" class="btn btn-light btn-sm"  id="costil21">Сохранить</button>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="card-block" id="costil22">
                                        <h6 class="m-b-20 p-b-5 b-b-default f-w-600"  id="costil15">ФИО</h6>
                                        <div class="row">
                                            <div class="input-group input-group-sm mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"
                                                        id="inputGroup-sizing-sm" >Фамилия</span>
                                                </div>
                                                <input name="SName" type="text" class="form-control"
                                                    aria-label="Sizing example input" id="costil15"
                                                    aria-describedby="inputGroup-sizing-sm" value="<?=$user['SName']?>">
                                            </div>
                                            <div class="input-group input-group-sm mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"
                                                    id="inputGroup-sizing-sm"  >Имя        </span>
                                                </div>
                                                <input name="Name" type="text" class="form-control"
                                                    aria-label="Sizing example input" id="costil15"
                                                    aria-describedby="inputGroup-sizing-sm" value="<?=$user['Name']?>">
                                            </div>
                                            <div class="input-group input-group-sm mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"
                                                        id="inputGroup-sizing-sm"   >Отчество</span>
                                                </div>
                                                <input name="PName" type="text" class="form-control"
                                                    aria-label="Sizing example input" id="costil15"
                                                    aria-describedby="inputGroup-sizing-sm" value="<?=$user['PName']?>">
                                            </div>




                                      
                                        </div>
                                        <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600" id="costil20">Ваша почта</h6>
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"
                                                    id="inputGroup-sizing-sm">Email</span>
                                            </div>
                                            <input name="Email" type="email" class="form-control" value="<?=$user['Email']?>"
                                                aria-label="Sizing example input" id="costil15"
                                                aria-describedby="inputGroup-sizing-sm" placeholder="необязательное поле">
                                        </div>
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                <form action="../MySQL/end.php" method="post">                 
                                        <button type="submit" class="btn btn-outline-dark me-2" id="costil24">
                                            <div >Выйти из профиля</div>
                                        </button>                                                                  
                </form>
            </div>




        </div>
    </div>
    <?php require $_SERVER['DOCUMENT_ROOT'].'/footer.php'; ?>


</body>

</html>
<?php 
exit();

?>