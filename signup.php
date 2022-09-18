
<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
include("connections.php");
// declaring
$name = $_POST["user_name"];
$email = $_POST["email"];
$pass = hash("sha256" , $_POST["password"]);
// // creating a query to insert the name, email & the pssword of a new user to the DB
$insert_query =$mysqli->prepare("INSERT INTO `users` (`id`, `password`, `email`, `user_name`, `profile_img`)
 VALUES (NULL, ?, ?, ?, NULL)");
 // binding the parameters and executing
$insert_query->bind_param("sss", $pass, $email, $name );
$insert_query->execute();
// adding an array to check if the process succeded
$response = [];
$response["success"] = true;

echo json_encode($response);

?>