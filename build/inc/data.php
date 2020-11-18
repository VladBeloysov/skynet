<?php
$f_json = 'http://sknt.ru/job/frontend/data.json';
$json = file_get_contents("$f_json");
$obj = json_decode($json,true);
?>
