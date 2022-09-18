<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
include("connections.php");
// declaring the password
$pass = hash("sha256" , $_POST["password"]);
// selecting the password (given by the user) if found
$select_query = $mysqli->prepare("SELECT password FROM users WHERE password = '$pass' ");
$select_query->execute();
$array = $select_query -> get_result();

$response = [];

while($a = $array->fetch_assoc()){
    $response[] = $a;
}
// echoing the found password
$json = json_encode($response);

echo $json;

?>