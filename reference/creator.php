<?php 
function create($a){ ?>


    <a href="<?=$a?>1#here"><h4>• Что бы оставить заявку:</h4></a>    

    <a href="<?=$a?>2#here"><h4>• Как увидеть ответ техподдержки:</h4></a>  


<?php } 


function create_admin($a){ ?>


    <a href="<?=$a?>#"><h4><button type="button" class="btn btn-outline-dark btn-lg">• Справка для сисадмина</button></h4></a>    

    <a href="<?=$a?>edit"><h4> <button type="button" class="btn btn-outline-dark btn-lg">• Редактор справок</button></h4></a>  


    <br><br><hr><br>

<?php } 

?>

