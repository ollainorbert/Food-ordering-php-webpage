<?php

include "_Class_etel.php";

include "_connect.php";

$sql = "SELECT item_name, darab_szam, item_ar FROM cart";

$result = $connection->query($sql);

$etelekTomb = array();
$i = 0;
$vegOsszeg = 0;

while($row = $result->fetch_assoc()) {
	$etelekTomb[$i] = new Etel($row["item_name"], $row["darab_szam"], $row["item_ar"]);
	$etelekTomb[$i]->kiiras();
	$vegOsszeg += $etelekTomb[$i]->ossz();
	++$i;
	echo "<br>" . "<br>";
}

echo "<br>" . "Végösszeg: " . $vegOsszeg . " FT!";

mysqli_close($connection);

?>