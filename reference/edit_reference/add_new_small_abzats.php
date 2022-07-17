<?php 
    require $_SERVER['DOCUMENT_ROOT'].'/MySQL/connectSQL.php';
    $IdRef = $_POST["id"];
    
    $mysql->query("INSERT INTO `reference-fields` (`id`, `IdReference`, `type`, `text`, `attempt`)  VALUES (NULL, '$IdRef', '3', 'подпись к рисунку', '0');");//3 - значит тип подпись
    
    $result = array(
      'id'=>$IdRef
    );
echo json_encode($result);
?>