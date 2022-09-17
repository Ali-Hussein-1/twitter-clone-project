<?php
include("connections.php");
$tweet = $_POST['text'];
$query = $mysqli -> prepare("INSERT INTO `tweets` (`text`, `timestamp`, `photo`) VALUES (?, NULL, NULL)");
$query->bind_param("s", $tweet);
$query->execute(); 
$response = [];
$response["success"] = true;

echo json_encode($response);
?>