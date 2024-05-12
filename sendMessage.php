<?php
require('connect.php');

$username = $_POST['username'];
$message = $_POST['message'];
$message = addslashes($message);


$sendMsg = "INSERT INTO Chat (Message, Username) VALUES ('".$message."', '".$username."')";
$sendMsgResult = $conn->query($sendMsg);
?>