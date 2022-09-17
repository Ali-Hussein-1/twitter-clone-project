<?php
include("connections.php");
$blocker = $_POST["blocker_id"];
$blocked = $_POST["blocked_id"];

$statement =$mysqli->prepare("INSERT INTO `blocked` (`id`, `password`, `email`, `user_name`, `following count`)
 VALUES (NULL, ?, ?, ?, NULL)");
$statement->bind_param("sss", $pass, $email, $name );
$statement->execute();
$statement->close();
?>