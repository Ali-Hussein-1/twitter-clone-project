<?php
include("connections.php");


$name = $_POST["user_name"];
$email = $_POST["email"];
$pass = hash("sha256", $_POST["password"]);

$query = "INSERT INTO twitter_db(user_name, email, password) VALUE (?, ?, ?)";
$query->bind_param("sss", $name, $email, $pass);
$query->execute();

$response = [];
$response["success"] = true;

echo json_encode($response);

?>