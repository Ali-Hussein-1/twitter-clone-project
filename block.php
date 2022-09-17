<?php
include("connections.php");
$blocker = $_POST["blocker_id"];
$blocked = $_POST["blocked_id"];

$statement =$mysqli->prepare("INSERT INTO `blockers` (`blocker_id`, `blocked_id`) VALUE(?,?)");
$statement->bind_param("ii", $blocker, $blocked);
$statement->execute();
$response = [];
$response["success"] = true;

echo json_encode($response);
?>