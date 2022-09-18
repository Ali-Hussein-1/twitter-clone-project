<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
include("connection.php");

if ( isset($_GET["password"]) && isset($_GET["username"]){
$pass = hash("sha256" , $_POST["password"]);
$username=$_POST["username"];
$query = $mysqli->prepare("SELECT username,password FROM contacts WHERE password = `$pass` AND username =`$username` ");
$query->execute();

$array = $query -> get_result();

$response = [];
while($a = $array->fetch_assoc()){
    $response[] = $a;
}

echo json_encode($response);

}



?>