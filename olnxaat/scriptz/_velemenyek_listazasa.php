<?php

if (isset($_GET['tipus']) && !empty($_GET['tipus'])) {
	$tipus = $_GET['tipus'];
	
	include "_connect.php";
	$sql = mysqli_query($connection, "SELECT item_name FROM stock
		WHERE item_name='$tipus'");	
	if(mysqli_num_rows($sql)!=1) {
		echo "Nincs ilyen fajta étel a kínálatunkban!";
		header("Refresh: 2; URL=order.php");
		mysqli_close($connection);
		exit();
	}
	
	$_SESSION['fajta'] = $tipus;
	
} else {
	echo 'Étel fajtát kötelező megadni!';
	header("Refresh: 2; URL=order.php");
	exit();
}

echo "Vélemény hozzáadása:" . "<br>" . "<br>";
?>

<form action="scriptz/_add_velemeny.php" method="GET">
	<input type="text" name="velemenySzoveg" value="" size="30"/><br><br>
	<input type="submit" name="submit" value="Vélemény elküldése!"/>
</form>
<br><br><br>

<?php

echo $tipus . " véleményei:";
echo "<br>" . "- - - - - - - - - - - - - - - - - -";
echo "<br>" . "<br>";

$sql = "SELECT username, velemeny, datum FROM velemenyek WHERE item_name = '$tipus'";

$result = $connection->query($sql);

include "_Class_velemeny.php";

$velemenyTomb = array();
$i = 0;

while($row = $result->fetch_assoc()) {
	$velemenyTomb[$i] = new Velemeny($row["username"], $row["velemeny"], $row["datum"]);
	$velemenyTomb[$i]->kiiras();
	++$i;
	echo "<br>" . "<br>";
}

mysqli_close($connection);

?>