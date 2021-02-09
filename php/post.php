<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');


// if(isset($_POST)){
// $comment = $_POST;
// var_dump($comment);
// }
$param = json_decode(file_get_contents('php://input'), true);
$json=json_encode($param);
file_put_contents("./data.json", $json);
var_dump($param);


?>