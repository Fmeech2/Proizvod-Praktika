
function sendAjaxForm(result_form, ajax_form, url,type){
    $.ajax({
        url:    url,    //url страницы (action.php)
        type:   "POST", //метод отправки
        dataType:"html",//формат данных
        data: $("#"+ajax_form).serialize(), // Сериaлизуем объект
        success: function(response) { //Данные отправлены успешно
            result = $.parseJSON(response);
            if(type==1){//значит заголовок
                $('#'+result_form).html(document.getElementById(result_form).innerHTML+'            <div>                <textarea onkeyup="textAreaAdjust(this)" onclick="textAreaAdjust(this)" style="width: 90%; height: auto; resize:vertical;"> Ваш новый абзац</textarea>                                     <div style="display: flex;margin-bottom: 20px;">                    <form><button type="button" class="btn btn-outline-success btn-sm" style="margin:10px;">Сохранить абзац</button></form>                    <form><button type="button" class="btn btn-outline-danger btn-sm" style="margin:10px;">Удалить абзац</button></form>                </div>            </div>   '); //result.имя_массива
                }
            else if(type==2){//значит картинка
                $('#'+result_form).html(document.getElementById(result_form).innerHTML+'                    <div>            <form action="add_abzats.php" method="post" enctype="multipart/form-data">            <img src="../img/start.png" class="img_reference_small">                <input type="file" name="img_otpravka"><br>                 <div style="display: flex;margin-bottom: 20px;">                <button type="submit" class="btn btn-outline-success btn-sm" style="margin:10px;">Сохранить картинку</button>                <button type="button" class="btn btn-outline-danger btn-sm" style="margin:10px;">Удалить картинку</button>                </div>                                       </form>                        </div>   '); //result.имя_массива
                }
        },
        error: function(response){// Данные не отправлены
            $('#'+result_form).html('Ошибка. Данные не отправлены.');

        }
    })
}



