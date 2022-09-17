header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
<?php
include("connections.php");
$tweet = $_POST['text'];
$photo = $_POST['photo'];
$query = $mysqli -> prepare("INSERT INTO `tweets` (`text`, `timestamp`, `photo`) VALUES (?, NULL,?)");
$query->bind_param("ss", $tweet, $photo);
$query->execute(); 
$response = [];
$response["success"] = true;

echo json_encode($response);
?>