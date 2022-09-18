
<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
include("connections.php");
// declaring
$my_email = $_POST['email'];  
$pass =hash("sha256" , $_POST["password"]);
// selecting the email & password(given by the user) if found
$select_query = $mysqli->prepare("SELECT email, password FROM users WHERE email = 'email' && password = 'pass' ");
$select_query->execute();
$array = $select_query->get_result();

$response = [];

while($a = $array->fetch_assoc()){
    $response[] = $a;
}
// echoing the found password & email
echo json_encode($response);

?>
