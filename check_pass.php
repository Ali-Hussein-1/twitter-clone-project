<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
include("connections.php");

$pass = hash("sha256" , $_POST["password"]);
$select_query = $mysqli->prepare("SELECT password FROM users WHERE password = '$pass' ");
$select_query->execute();
$array = $select_query -> get_result();

$response = [];

while($a = $array->fetch_assoc()){
    $response[] = $a;
}

$json = json_encode($response);

if (!$json){
    echo "NOT FOUND";
}
else
echo $json;

?>