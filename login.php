<?php
require('connect.php');

$username = $_POST['username'];
$password = $_POST['password'];

$login = "SELECT * FROM ChatLogin WHERE Username='".$username."' and Password='".$password."'";
$loginResult = $conn->query($login);

if ($loginResult->num_rows == 1) {
	echo "Logged In";
} else {
	echo "Username and/or password is incorrect!";
}
?>