<?php

const DATABASE_URL = "localhost";
const DATABASE_USER = "root";
const DATABASE_PW = "";
const DATABASE_NAME = "webtervdb";

$connection = @mysqli_connect(DATABASE_URL, DATABASE_USER, DATABASE_PW, DATABASE_NAME);


// Ha nem létezik az adatbázis, akkor 1049 hibakódot kapunk
if (mysqli_connect_errno() == 1049) {

	// Új kapcsolat nyitása alapértelmezett adatbázis nélkül
	$connection = @mysqli_connect(DATABASE_URL, DATABASE_USER, DATABASE_PW);

	// Adatbázis létrehozása
	if (!mysqli_query($connection, "CREATE DATABASE IF NOT EXISTS ".DATABASE_NAME)) {
	echo "Adatbázis létrehozása sikertelen!";
	exit;
	}

	// Újonnan létrehozott adatbázis kiválasztása
	mysqli_select_db($connection, DATABASE_NAME);

	// Táblák létrehozása
	if (!mysqli_query($connection, <<<EOD
		CREATE TABLE `users` (
		`username` VARCHAR(10) NOT NULL,
		`jog` INT NOT NULL DEFAULT '2',
		`teljesnev` VARCHAR(25) NOT NULL,
		`email` VARCHAR(320) NOT NULL,
		`bdate` VARCHAR(10) NOT NULL,
		`nem` INT NOT NULL,
		`ert1` INT NOT NULL,
		`ert2` INT NOT NULL,
		`jelszo` VARCHAR(20) NOT NULL,
		PRIMARY KEY (`username`)
		)
EOD
		)) {
		echo "A tábla létrehozása sikertelen!";
		exit;
}
  
	// További táblák létrehozása
	include "_add_tables.php";
	
	// Készlet feltöltése
	include "_keszlet_feltoltese.php";

}

if (mysqli_connect_errno()) {
	echo "Hiba az adatbázishoz kapcsolódás során." . PHP_EOL;
	echo "Hibakód: " . mysqli_connect_errno() . PHP_EOL;
	echo "Hiba üzenet: " . mysqli_connect_error() . PHP_EOL;
	exit;
}

?>