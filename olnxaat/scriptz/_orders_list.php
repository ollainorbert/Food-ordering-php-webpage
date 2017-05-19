<?php

$user = $_SESSION['use'];

include "_Class_etel_for_orders.php";

$sql = "SELECT * FROM orders WHERE username='$user'";

$result = $connection->query($sql);

$etelekTomb = array();
$i = 0;
$vegOsszeg = 0;

while($row = $result->fetch_assoc()) {
	$etelekTomb[$i] = new Etel($row["item_name"], $row["darab_szam"], $row["item_ar"], $row["datum"]);
	$etelekTomb[$i]->kiiras();
	++$i;
	echo "<br>" . "<br>";
}

mysqli_close($connection);

?>