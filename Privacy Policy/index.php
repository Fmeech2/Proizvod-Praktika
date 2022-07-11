<?php
require $_SERVER['DOCUMENT_ROOT'].'/MySQL/connectSQL.php';

$result = $mysql->query("SELECT * FROM `admin-panel`");
$Policy =$result->fetch_assoc();
$Policy = $Policy['UserАgreement'];


?>

<textarea style="width: 100%;height:100%;border: none;resize: none;"  disabled="disabled"><?=$Policy?></textarea>
