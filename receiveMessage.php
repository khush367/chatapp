<?php
require('connect.php');

$username = $_POST['username'];

$sql = "SELECT * FROM Chat WHERE Username='".$username."'";
$result = $conn->query($sql);
$Msg = "";

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        $Msg = $row['Message'];
    }
} else {
    echo "0 results";
}
echo $Msg;
?>