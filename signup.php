<?php
include("connections.php");


$name = $_POST["user_name"];
$email = $_POST["email"];
$pass = $_POST["password"];


$query =$mysqli->prepare("INSERT INTO `users` (`password`, `email`, `user_name`,)
 VALUES (?, ?, ?)");
$query->bind_param("sss", $pass, $email, $name );
$query->execute();

$response = [];
$response["success"] = true;

echo json_encode($response);

?>