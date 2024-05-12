<?php
$host = "";
$user = "";
$pass = "";
$database = "";

$conn = new mysqli($host, $user, $pass, $database);
if ($conn->connect_error) {
	die('Connection Error ('.$conn->connect_errno.') '.$conn->connect_error);
}
?>