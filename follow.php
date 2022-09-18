
<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
include("connections.php");
$follower = $_POST["follower_id"];
$followed = $_POST["followed_id"];

$statement =$mysqli->prepare("INSERT INTO `followers` (`follower_id`, `followed_id`) VALUE(?,?)");
$statement->bind_param("ii", $follower, $followed);
$statement->execute();
$response = [];
$response["success"] = true;

echo json_encode($response);
?>