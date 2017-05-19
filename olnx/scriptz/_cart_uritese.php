<?php

session_start();
if(!isset($_SESSION['use'])) {
	header("Location:belepes.php");
}

$sql = "DELETE FROM cart";

include "_connect.php";

if ($connection->query($sql) === TRUE) {
    echo "A kosár kiürítve!";
} else {
    echo "A kosár kiürítése nem sikerült: " . $connection->error;
}

mysqli_close($connection);

header("Refresh: 2; URL=../cart.php");

?>