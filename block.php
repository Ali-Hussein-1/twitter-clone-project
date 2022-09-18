
<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
include("connections.php");
// declaring
$blocker = $_POST["blocker_id"];
$blocked = $_POST["blocked_id"];
// creating a query to insert the blocker & the blocked id's to the DB
$insert_query =$mysqli->prepare("INSERT INTO `blockers` (`blocker_id`, `blocked_id`) VALUE(?,?)");
// binding the parameters and executing
$insert_query->bind_param("ii", $blocker, $blocked);
$insert_query->execute();
// adding an array to check if the process succeded
$response = [];
$response["success"] = true;

echo json_encode($response);
?>