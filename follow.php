
<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
include("connections.php");
// declaring
$follower = $_POST["follower_id"];
$followed = $_POST["followed_id"];
// creating a query to insert the follower & the followed id's to the DB
$insert_query =$mysqli->prepare("INSERT INTO `followers` (`follower_id`, `followed_id`) VALUE(?,?)");
$insert_query->bind_param("ii", $follower, $followed);
$insert_query->execute();
$response = [];
$response["success"] = true;

echo json_encode($response);
?>