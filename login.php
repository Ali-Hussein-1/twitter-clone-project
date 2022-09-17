<?php
include("connections.php");
$my_email = $_POST['email'];  
$password = $_POST['pass'];  
$query = $mysqli->prepare("SELECT email, password FROM users,where email=my_email && password = my_password");
$query->execute();
$array = $query->get_result();
?>