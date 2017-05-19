<?php

session_start();
if(!isset($_SESSION['use'])) {
	header("Location:belepes.php");
}

//REMOVE THIS
//exit();

//rendeles leadasa
include "_connect.php";

$sql = "SELECT item_name, darab_szam, item_ar FROM cart";

$result = $connection->query($sql);

$fajta;
$dbszam;
$termek_ar;
$user = $_SESSION['use'];

while($row = $result->fetch_assoc()) {
	$fajta = $row["item_name"];
	$dbszam = $row["darab_szam"];
	$termek_ar = $row["item_ar"];
	
	$sql = "INSERT INTO orders (username, item_name, item_ar, darab_szam)
	VALUES ('$user', '$fajta', '$dbszam', '$termek_ar')";
	if(mysqli_query($connection, $sql) === TRUE) {
		//minden ok
		echo "Rendelés leadva!" . "<br>";
	} else {
		echo "Nem sikerült a termék megrendelése,
			kérem később próbálkozzon újra!" . "<br/>\n";
		echo "Error: " . $sql . "<br>" . $connection->error;
	}
	
}

//cart uritese
$sql = "DELETE FROM cart";

if ($connection->query($sql) === TRUE) {
    //minden ok
} else {
    echo "A kosár kiürítése nem sikerült: " . $connection->error;
}
//cart uritese END

header("Refresh: 2; URL=../cart.php");

mysqli_close($connection);

?>
