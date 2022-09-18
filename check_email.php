<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
include("connections.php");
// declaring the email
$email = $_POST["email"];
// selecting the email (given by the user) if found
$select_query = $mysqli->prepare("SELECT email FROM users WHERE email = '$email' ");
$select_query->execute();
$array = $select_query -> get_result();

$response = [];

while($a = $array->fetch_assoc()){
    $response[] = $a;
}
// echoing the found email
$json = json_encode($response);

echo $json;

?>