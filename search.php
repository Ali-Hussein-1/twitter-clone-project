<?php
include("connections.php");
$name = $_POST["user_name"];
$select_query = $mysqli -> prepare("SELECT user_name FROM users WHERE user_name = '$name'");
$select_query -> execute();
$array = $select_query->get_result();

$response = [];

while($a = $array->fetch_assoc()){
    $response[] = $a;
}

$json = json_encode($response);
echo $json;

?>