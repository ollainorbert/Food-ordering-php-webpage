<?php

session_start();

include "_connect.php";

$nev = $_SESSION['use'];
$pw = $_GET["pw"];

if ($pw != "") {
	$x = $pw;
	if (strlen($x) < 8) {
		echo 'A jelszónak minimum 8 karakternek kell lennie!';
		exit();
	} else if (!preg_match("#[0-9]+#", $x)) {
        echo 'A jelszónak tartalmazina kell legalább egy számot!';
    } else if (!preg_match("#[a-z]+#", $x)) {
        echo 'A jelszónak tartalmazina kell legalább egy kisbetűt!';
    } else if (!preg_match("#[A-Z]+#", $x)) {
        echo 'A jelszónak tartalmazina kell legalább egy nagybetűt!';
    }
} else {
	echo 'Jelszót kötelező megadni!';
	header("Refresh: 2; URL=../index.php");
	exit();
}

$sql = "UPDATE users
	SET jelszo = '$pw'
	WHERE username = '$nev'";

$result = $connection->query($sql);

echo "Jelszó sikeresen megváltoztatva!";

mysqli_close($connection);

header("Refresh: 2; URL=../index.php");

?>