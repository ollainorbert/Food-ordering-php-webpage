<?php

include "_connect.php";

$nev = $_SESSION['use'];

$sql = "SELECT teljesnev, email FROM users
	WHERE username = '$nev'";
$result = $connection->query($sql);

while($row = $result->fetch_assoc()) {
	echo "Teljes név: ". $row["teljesnev"]. "<br>E-mail cím: " . $row["email"] . "<br>";
}

?>