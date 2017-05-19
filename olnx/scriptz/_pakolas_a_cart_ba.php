<?php

session_start();

if(!isset($_SESSION['use'])) {
	header("Location:belepes.php");
}

if (isset($_GET['fajta']) && !empty($_GET['fajta'])) {
	$fajta = $_GET['fajta'];
	
	include "_connect.php";
	$sql = mysqli_query($connection, "SELECT item_name FROM stock
		WHERE item_name='$fajta'");	
	if(mysqli_num_rows($sql)!=1) {
		echo "Nincs ilyen fajta étel a kínálatunkban!";
		header("Refresh: 2; URL=../order.php");
		mysqli_close($connection);
		exit();
	}
} else {
	echo 'Étel fajtát kötelező megadni!';
	header("Refresh: 2; URL=../order.php");
	exit();
}

if (isset($_GET['dbszam']) && !empty($_GET['dbszam'])) {
	$dbszam = (is_numeric($_GET['dbszam']) ? (int)$_GET['dbszam'] : 0);
	if( $dbszam == 0 ) {
		echo "Nem számot adott meg a darabszámhoz!";
		header("Refresh: 2; URL=../order.php");
		exit();
	}
} else {
	echo 'Darabszámot kötelező megadni!';
	header("Refresh: 2; URL=../order.php");
	exit();
}

$user = $_SESSION['use'];

$sql = mysqli_query($connection, "SELECT item_ar FROM stock
		WHERE item_name='$fajta'");

$sql = "SELECT item_ar FROM stock WHERE item_name='$fajta'";
$result = $connection->query($sql);
$row = $result->fetch_assoc();
$termek_ar = $row["item_ar"];

$sql = "INSERT INTO cart (username, item_name, darab_szam, item_ar)
VALUES ('$user', '$fajta', '$dbszam', '$termek_ar')";

if(mysqli_query($connection, $sql) === TRUE) {
	echo "A termék a kosárban!";
} else {
	echo "Nem sikerült a termék kosárba helyezése,
		kérem később próbálkozzon újra!" . "<br/>\n";
	echo "Error: " . $sql . "<br>" . $connection->error;
	header("Refresh: 2; URL=../order.php");
}

mysqli_close($connection);

header("Refresh: 2; URL=../cart.php");

/*
foreach($_SESSION['stock'] as $row) {
	if($row['item_name'] == $_POST['fajta']) {
		echo "HURRA";
	}

}
*/

?>