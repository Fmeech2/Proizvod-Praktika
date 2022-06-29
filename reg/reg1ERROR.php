<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Регистрация</title>
    <!--Регистрация, Заявки, Новые заявки, Профиль, -->
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!--Мой ксс и джава -->
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='programming.css'>
    <script src='main.js'></script>
    <!--Мой ксс и джава -->

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
    <div class="start" style="    background-color: rgba(0, 0, 0, 0.0);">
        <!--Этот див тебе не нужен-->
        <div style="width: 100%;  display: flex;flex-wrap: wrap; margin-bottom: auto; justify-content: center; ">
            <!--Этот див тебе не нужен-->
            <div class="position-absolute top-50 start-50 translate-middle">
            <div class="alert alert-danger" role="alert">
            Секретный код НЕВЕРНЫЙ!
</div>
                <form action="../MySQL/Register.php" method="post" id="FormId">
                    <div style="font-size: 170%; margin: 10px 0 7px 0;">Регистрация</div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Логин</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="DBLogin" placeholder="Придумайте себе логин">
                        <small id="emailHelp" class="form-text text-muted">Хорошо запомните ваш логин и пароль.</small>
                    </div>
                    <style>
                        .password {
                            position: relative;
                        }

                        .password-control {
                            position: absolute;
                            top: 11px;
                            right: 6px;
                            display: inline-block;
                            width: 20px;
                            height: 20px;
                            background: url(/view.svg) 0 0 no-repeat;
                        }

                        .password-control.view {
                            background: url(/no-view.svg) 0 0 no-repeat;
                        }
                    </style>
                    <script>
                        function show_hide_password(target) {
                            var input = document.getElementById('exampleInputPassword1');
                            if (input.getAttribute('type') == 'password') {
                                target.classList.add('view');
                                input.setAttribute('type', 'text');
                            } else {
                                target.classList.remove('view');
                                input.setAttribute('type', 'password');
                            }
                            return false;
                        }
                        function show_hide_password2(target) {
                            var input = document.getElementById('exampleInputPassword2');
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
                    <div class="form-group">
                        <label for="exampleInputPassword1">Пароль</label>
                        <div class="password">
                            <input type="password" class="form-control" id="exampleInputPassword1" name="DBPassword"  placeholder="Придумайте пароль">
                            <a href="#" class="password-control" onclick="return show_hide_password(this);"></a>
                        </div>
                        <small id="passwordHelpInline" class="text-muted">
                            Длина должна составлять 6-20 символов.
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Повторный пароль</label>
                        <div class="password">
                            <input type="password" class="form-control" id="exampleInputPassword2" name="DBPassword"  placeholder="Введите пароль ещё раз">
                            <a href="#" class="password-control" onclick="return show_hide_password2(this);"></a>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Секретный код</label>
                        <input type="text" class="form-control" id="exampleInputPassword3" name="DBsekret_kod" placeholder=" Код выдаётся администратором лично">
                        <small id="passwordHelpInline2" class="text-muted">
                            Обратитесь к администратору, что бы получить проверочный код.
                        </small>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1" style="width: 400px; display: flex; margin-top: 10px;">Я даю согласие на обработку
                            персональных данных в соответствии с Политикой конфиденциальности</label>
                    </div>
                    <div>
                        <a href="../Privacy Policy/" class="btn-link">Политика конфиденциальности</a>
                    </div>
                </form>
                <button onclick="check()" style="width: 432px;" class="btn btn-primary">Зарегестрироваться</button>
                <div class="form-group">
                    <small id="emailHelp" class="form-text text-muted"><a href="../login/" class="btn-link">Уже
                            зарегистрированы?</a> </small>
                </div>
            </div>
        </div>
    </div>

    <script>
        function check() {

            if (document.getElementById('exampleInputEmail1').value.length < 5)
                alert("Слишком короткий логин");
            else if (document.getElementById('exampleInputEmail1').value.length > 20)
                alert("Слишком длинный логин. Максимальная длинна логина должна быть 20 символов.");
            else if (document.getElementById('exampleInputPassword1').value.length < 6)
                alert("Слишком короткий пароль. Длина должна составлять 6-20 символов.");
            else if (document.getElementById('exampleInputPassword1').value.length > 20)
                alert("Слишком длинный пароль. Длина должна составлять 6-20 символов.");
            else if (!exampleCheck1.checked)
                alert("Вы не приняли политику конфиденциальности. Для регистрации необходимо дать согласие на обработку персоналдьных данных.");
            else if (document.getElementById('exampleInputPassword2').value == document.getElementById('exampleInputPassword1').value) {
                var myform = document.getElementById("FormId");
                myform.submit();
            } else
                alert('Пароли не совпадают.');
        }
    </script>




</body>

</html>