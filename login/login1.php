<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Авторизация</title>
    <!--Регистрация, Заявки, Новые заявки, Профиль, -->
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!--Мой ксс и джава -->
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='programming.css'>
    <script src='main.js'></script>
    <!--Мой ксс и джава -->

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
</head>

<body>
    <div class="start" style="    background-color: rgba(0, 0, 0, 0.0);">
        <!--Этот див тебе не нужен-->
        <div style="width: 100%;  display: flex;flex-wrap: wrap; margin-bottom: auto; justify-content: center; ">
            <!--Этот див тебе не нужен-->
            <div class="position-absolute top-50 start-50 translate-middle">
            <form action="../MySQL/identification.php" method="post">
               <div style="font-size: 140%; margin: 10px 0 7px 0;">Войдите, чтобы оставить заявку</div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Логин</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="DBLogin" placeholder="Логин">
                   
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Пароль</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="DBPassword" placeholder="Пароль">
                    <small id="emailHelp" class="form-text text-muted" >Если забыли логин/пароль, то обратитесь к администрации.</small>
                </div>
                <div style="margin-top: 10px;">
                    <button type="submit" class="btn btn-primary">Войти</button>
                    <a href="../reg/"> <button type="button" class="btn btn-outline-secondary">Регистрация</button></a>
                 </div>
                 <small id="emailHelp" class="form-text text-muted" >Впервые здесь? Тогда сначала <a href="../reg/" class="btn-link">зарегестрируйтесь.</a> </small>
               
            </form>
        </div>
        </div>
    </div>
</body>

</html>