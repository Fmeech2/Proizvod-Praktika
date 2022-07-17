
function sendAjaxForm(result_form, ajax_form, url,type,id,IdRef){
    $.ajax({
        url:    url,    //url страницы (action.php)
        type:   "POST", //метод отправки
        dataType:"html",//формат данных
        data: $("#"+ajax_form).serialize(), // Сериaлизуем объект
        success: function(response) { //Данные отправлены успешно
            result = $.parseJSON(response);
            if(type==1){//значит заголовок
                $('#'+result_form).html(document.getElementById(result_form).innerHTML+'<div class="alert alert-primary" role="alert"> Подождите... Сейчас появятся изменения.</div><script>location.reload();</script>'); //result.имя_массива
                }
                else if(type==2){//значит картинка
                    $('#'+result_form).html(document.getElementById(result_form).innerHTML+'<div class="alert alert-primary" role="alert"> Подождите... Сейчас появятся изменения.</div><script>location.reload();</script>'); //result.имя_массива
                    }
                    else if(type==3){//значит подпись
                        $('#'+result_form).html(document.getElementById(result_form).innerHTML+'<div class="alert alert-primary" role="alert"> Подождите... Сейчас появятся изменения.</div><script>location.reload();</script>'); //result.имя_массива
                        }
        },
        error: function(response){// Данные не отправлены
            $('#'+result_form).html('Ошибка. Данные не отправлены.');

        }
    })
}



