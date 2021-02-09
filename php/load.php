<?php 
header("Access-Control-Allow-Origin: *");

    $url = "./data.json";
    $json = file_get_contents($url);
    $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
    $arr = json_decode($json,true);
    // var_dump($json);
    echo json_encode($arr);
    
?>