<?php

session_start();
if(!isset($_SESSION['use'])) {
	header("Location:belepes.php");
}

if (isset($_GET['velemenySzoveg']) && !empty($_GET['velemenySzoveg'])) {
	$velemenySzoveg = $_GET['velemenySzoveg'];
} else {
	echo 'Véleményt kötelező megadni!';
	header("Refresh: 2; URL=../order.php");
	exit();
}

$user = $_SESSION['use'];
$fajta = $_SESSION['fajta'];

$sql = "INSERT INTO velemenyek (username, item_name, velemeny)
VALUES ('$user', '$fajta', '$velemenySzoveg')";

include "_connect.php";

if(mysqli_query($connection, $sql) === TRUE) {
	echo "A vélemény hozzáadva!";
} else {
	echo "Nem sikerült a véleményt hozzáadni,
		kérem később próbálkozzon újra!" . "<br/>\n";
	echo "Error: " . $sql . "<br>" . $connection->error;
	header("Refresh: 2; URL=../order.php");
}

mysqli_close($connection);

header("Refresh: 2; URL=../order.php");

?>