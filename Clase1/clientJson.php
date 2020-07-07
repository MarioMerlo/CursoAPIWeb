<?php

define("WS_URL", "http://eit.indianadev.biz/clase1/json.php");

$json = file_get_contents(WS_URL);
#echo $json;

if ($json) {
    $info = json_decode($json);
    $infoArray = json_decode($json,true);
    var_dump($info);
    var_dump($infoArray);

    echo $info->titulo ."<br/>";
    echo $infoArray['titulo'];
}

