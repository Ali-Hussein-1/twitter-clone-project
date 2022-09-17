<?php
include("connections.php");


$name = $_POST["user_name"];
$email = $_POST["email"];
$pass = hash("sha256", $_POST["password"]);


$query =$mysqli->prepare("INSERT INTO `users` (`id`, `password`, `email`, `user_name`, `following count`)
 VALUES (NULL, ?, ?, ?, NULL)");
$query->bind_param("sss", $pass, $email, $name );
$query->execute();

$response = [];
$response["success"] = true;

echo json_encode($response);

?>