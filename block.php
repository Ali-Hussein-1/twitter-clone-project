
<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
include("connections.php");

$blocker = $_POST["blocker_id"];
$blocked = $_POST["blocked_id"];

$insert_query =$mysqli->prepare("INSERT INTO `blockers` (`blocker_id`, `blocked_id`) VALUE(?,?)");
$insert_query->bind_param("ii", $blocker, $blocked);
$insert_query->execute();
$response = [];
$response["success"] = true;

echo json_encode($response);
?>