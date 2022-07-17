<?php 
    require $_SERVER['DOCUMENT_ROOT'].'/MySQL/connectSQL.php';
    $IdRef = $_POST["id"];
    
    $mysql->query("INSERT INTO `reference-fields` (`id`, `IdReference`, `type`, `text`, `attempt`)  VALUES (NULL, '$IdRef', '1', 'Ваш новый абзац', '0');");//1 - значит тип абзац 
   
    $result = array(
      'id'=>$IdRef
    );
echo json_encode($result);
?>