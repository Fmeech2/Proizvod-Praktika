<?php 
    require $_SERVER['DOCUMENT_ROOT'].'/MySQL/connectSQL.php';
    $IdRef = $_POST["id"];
    $mysql->query("INSERT INTO `reference-fields` (`id`, `IdReference`, `type`, `text`, `attempt`) VALUES (NULL, '$IdRef', '2', 'start.png', '0');");//2 - значит тип картинка 
   
    $result = array(
      'id'=>$IdRef
    );
echo json_encode($result);
?>