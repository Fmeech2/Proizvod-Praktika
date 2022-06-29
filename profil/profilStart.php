<?php
$mysql=new mysqli('localhost','root','root','revolutionary-db');

$login = $_COOKIE['l1'];
$password = $_COOKIE['p1'];
$result = $mysql->query("SELECT * FROM `user` 
WHERE `Login` = '$login' 
AND `Password` = '$password'");

$user=$result->fetch_assoc();

if($user===null){//Если данные пользователя не совпадают в бд
    $mysql->close();
    setcookie('p1','',time()+60*60*24*356,"/");
    header('Location: /login/');
    exit();
}
$Name = $user['Name'];
$SName =$user['SName'];
$PName =$user['PName'];
$Email=$user['Email'];

 if($Name==''||$SName==''||$PName==''){
//заставляем ввести фио
 

$mysql=new mysqli('localhost','root','root','revolutionary-db');
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
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Завершение регистрации</title>
    <!-- Заявки,  Профиль, -->
    <meta name='viewport' content='width=device-width, initial-scale=1'>

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



</head>

<body>

<form action="../MySQL/ProfilEditStart.php" method="post">
    <div class="start">
        <!--Этот див тебе не нужен-->
        <div style="width: 100%;   ">
            <!--Этот див тебе не нужен-->            

            <div class="padding" style="margin-top: 100px;">
            <div style="    
            font-size: 200%;
            margin-left:350px;
            margin-bottom:10px;">
            Продолжите регистрацию</div>
                <div class="row container d-flex justify-content-center ">
                    <div class="col-xl-6 col-md-12 ">
                        <div class="card user-card-full shadow mb-5 bg-white rounded">
                            <div class="row m-l-0 m-r-0 ">
                                <div class="col-sm-4 bg-c-lite-green user-profile ">
                                    <div class="card-block text-center text-white">
                                        <div class="m-b-25">
                                            <img src="../avatar.jpg" style="border-radius: 50%;"
                                                class="img-radius" width="100" alt="Ваш аватар не смог загрузиться. Попробуйте загрузить новое фото, если проблемма не исчезнет со временем.">
                                        </div>
                                        <h6 class="f-w-600"><a href="" style="  text-decoration: none;
                                            color: rgb(255, 255, 255);">Профиль</a></h6><!--Изменить аватарку-->
                                              
                                     
                                        <button style="margin-top: 30px;" type="submit" class="btn btn-light btn-sm">Сохранить и<br>продолжить</button>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="card-block">
                                        <h6 class="m-b-20 p-b-5 b-b-default f-w-600">ФИО</h6>
                                        <div class="row">
                                            <div class="input-group input-group-sm mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"
                                                        id="inputGroup-sizing-sm">Фамилия</span>
                                                </div>
                                                <input name="SName" type="text" class="form-control"
                                                    aria-label="Sizing example input"
                                                    aria-describedby="inputGroup-sizing-sm" value="<?=$user['SName']?>" placeholder="Обязательное поле*">
                                            </div>
                                            <div class="input-group input-group-sm mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"
                                                    id="inputGroup-sizing-sm">Имя        </span>
                                                </div>
                                                <input name="Name" type="text" class="form-control"
                                                    aria-label="Sizing example input"
                                                    aria-describedby="inputGroup-sizing-sm" value="<?=$user['Name']?>" placeholder="Обязательное поле*">
                                            </div>
                                            <div class="input-group input-group-sm mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"
                                                        id="inputGroup-sizing-sm">Отчество</span>
                                                </div>
                                                <input name="PName" type="text" class="form-control"
                                                    aria-label="Sizing example input"
                                                    aria-describedby="inputGroup-sizing-sm" value="<?=$user['PName']?>" placeholder="Обязательное поле*">
                                            </div>




                                      
                                        </div>
                                        <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Ваша почта</h6>
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"
                                                    id="inputGroup-sizing-sm">Email</span>
                                            </div>
                                            <input name="Email" type="email" class="form-control"value="<?=$user['Email']?>"
                                                aria-label="Sizing example input"
                                                aria-describedby="inputGroup-sizing-sm" placeholder="Необязательное поле">
                                        </div>
                                     
                                    </div>
                                </div>
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

    </form>
</body>

</html>
<?php 
exit();
}
?>