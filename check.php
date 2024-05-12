<?php
require('connect.php');

$username = $_POST['username'];

$checkUser = "SELECT Username FROM ChatLogin WHERE Username='".$username."'";
$checkUserResult = $conn->query($checkUser);

if ($checkUserResult->num_rows == 1) {
	echo "Exists";
} else {
	echo "Username could not be found.";
}
?>