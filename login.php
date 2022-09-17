<?php
include("connections.php");
// $my_email = $_POST['email'];  
// $password = $_POST['pass'];  
$query = $mysqli->prepare("SELECT email, password FROM users");
$query->execute();
$array = $query->get_result();


$response = [];

while($a = $array->fetch_assoc()){
    $response[] = $a;
}

$json = json_encode($response);
echo $json;

?>
