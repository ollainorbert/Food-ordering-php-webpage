<?php

//CART, primKey lehetne az item_name,
//és ha már benne van, akkor csak hozzáad
//ha nincs akkor bele is teszi //TODO
if (!mysqli_query($connection, <<<EOD
CREATE TABLE `cart` (
    `username` VARCHAR(10) NOT NULL,
	`item_name` VARCHAR(10) NOT NULL,
	`darab_szam` INT NOT NULL DEFAULT '1',
	`item_ar` INT NOT NULL
)
EOD
)) {
    echo "A tábla létrehozása sikertelen!";
    exit;
}

//STOCK
if (!mysqli_query($connection, <<<EOD
CREATE TABLE `stock` (
	`item_name` VARCHAR(10) NOT NULL,
	`item_ar` INT NOT NULL,
    PRIMARY KEY (`item_name`)
)
EOD
)) {
    echo "A tábla létrehozása sikertelen!";
    exit;
}

//ORDERS, lényegében cart-ok lesznek eltárolva,
//egy dátummal kiegészítve,
//majd dátum szerint lesz lekérve
if (!mysqli_query($connection, <<<EOD
CREATE TABLE `orders` (
	`username` VARCHAR(10) NOT NULL,
	`item_name` VARCHAR(10) NOT NULL,
	`item_ar` INT NOT NULL,
	`darab_szam` INT NOT NULL,
	`datum` datetime default CURRENT_TIMESTAMP,
    PRIMARY KEY (`username`, `item_name`, `darab_szam`, `datum`)
)
EOD
)) {
    echo "A tábla létrehozása sikertelen!";
    exit;
}

//vélemények
if (!mysqli_query($connection, <<<EOD
CREATE TABLE `velemenyek` (
	`username` VARCHAR(10) NOT NULL,
	`item_name` VARCHAR(10) NOT NULL,
	`velemeny` VARCHAR(200) NOT NULL,
	`datum` datetime default CURRENT_TIMESTAMP,
    PRIMARY KEY (`username`, `item_name`, `datum`)
)
EOD
)) {
    echo "A tábla létrehozása sikertelen!";
    exit;
}

?>