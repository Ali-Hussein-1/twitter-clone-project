<?php
include("connections.php");
// declaring
$name = $_POST["user_name"];
// selecting the user we are searching for if found
$select_query = $mysqli -> prepare("SELECT user_name FROM users WHERE user_name = '$name'");
$select_query -> execute();
$array = $select_query->get_result();

$response = [];

while($a = $array->fetch_assoc()){
    $response[] = $a;
}
// echoing the found user
$json = json_encode($response);
echo $json;

?>