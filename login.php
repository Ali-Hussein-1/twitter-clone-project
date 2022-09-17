<?php
include("connections.php");
$my_email = $_POST['email'];  
$pass =$_POST["password"]; 
$query = $mysqli->prepare("SELECT email, password FROM users WHERE email='$my_email' && password='$pass';");
$query->execute();
$array = $query->get_result();

$response = [];

while($a = $array->fetch_assoc()){
    $response[] = $a;
}

$json = json_encode($response);
echo $json;

?>
