<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
include("connections.php");
// declaring
$text = $_POST['text'];
$photo = $_POST['photo'];
$user_id = $_POST['user_id'];
// creating a query to insert a tweet, an image & the user's id(user who wrote the tweet) to the DB
$insert_query = $mysqli -> prepare("INSERT INTO `tweets` (`id`, `text`, `photo`, `date`, `user_id`) VALUES (NULL, ?, ?, NULL, ?)");
$insert_query->bind_param("ssi", $text, $photo,$user_id);
$insert_query->execute(); 

$response = [];
$response["success"] = true;

echo json_encode($response);
?>