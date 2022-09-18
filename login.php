
<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
include("connections.php");
// $my_email = $_POST['email'];  
// $pass =hash("sha256" , $_POST["password"]);
$select_query = $mysqli->prepare("SELECT email, password FROM users");
$select_query->execute();
$array = $select_query->get_result();

$response = [];

while($a = $array->fetch_assoc()){
    $response[] = $a;
}

echo json_encode($response);
// echo $json;

?>
