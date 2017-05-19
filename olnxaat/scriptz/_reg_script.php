<?php

if (isset($_POST['nev']) && !empty($_POST['nev'])) {
	$x = $_POST['nev'];
	if (strlen($x) > 10) {
		echo 'A felhasználó név maximum 10 karakter hosszú lehet!';
		exit();
	}
} else {
	echo 'Felhasználó nevet kötelező megadni!';
	exit();
}

if (isset($_POST['nev2']) && !empty($_POST['nev2'])) {
	$x = $_POST['nev2'];
	if (strlen($x) > 25) {
		echo 'A teljes név maximum 25 karakter hosszú lehet!';
		exit();
	}
} else {
	echo 'Teljes nevet kötelező megadni!';
	exit();
}

if (isset($_POST['email']) && !empty($_POST['email'])) {
	$x = $_POST['email'];
	if (!filter_var($x, FILTER_VALIDATE_EMAIL)) {
		echo 'Rossz email formátum!';
		exit();
	}
} else {
	echo 'E-mail-t kötelező megadni!';
	exit();
}

if (isset($_POST['bdate']) && !empty($_POST['bdate'])) {
	$x = $_POST['bdate'];
	
	if ( !is_numeric($x[0]) || !is_numeric($x[1]) || !is_numeric($x[2])
			|| !is_numeric($x[3]) || !is_numeric($x[5]) || !is_numeric($x[6])
			|| !is_numeric($x[8]) || !is_numeric($x[9]) ||
			($x[4] != '-') || ($x[7] != '-') ){
		echo 'Helytelen dátum formátum!';
		exit();
	}
} else {
	echo 'E-mail-t kötelező megadni!';
	exit();
}
	
if (isset($_POST['ert2']) && !empty($_POST['ert2'])) {
	//do nothing | minden ok
} else {
	echo 'Nem választott értesítési időközt!';
}
	
if (isset($_POST['pw']) && !empty($_POST['pw'])) {
	$x = $_POST['pw'];
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
	exit();
}

$pw1 = $_POST['pw'];
$pw2 = $_POST['pw2'];
if ( $pw1 != $pw2 ) {
	echo 'A két jelszó nem egyezik!';
	exit();
}

$nevLogin = $_POST['nev'];
$nevTeljes = $_POST['nev2'];
$email = $_POST['email'];
$bdate = $_POST['bdate'];
$nem = $_POST['nem'];
$ert1 = 0;
$ert2 = $_POST['ert2'];
$pass = $_POST['pw'];
$pass2 = $_POST['pw2'];

$jog = 2;
	
if(empty($_POST['ert'])) {
	$ert1 = 9;
} else {
	$ert1 = 0;
	$ert1_tomb = $_POST['ert'];
	$ert1_helper = count($ert1_tomb);
	$ert1_counterREAL = 0;
	for($i=0; $i < $ert1_helper; ++$i) {
		if($ert1_tomb[$i] != 0) {
			$ert1_counterREAL += 1;	
		}
	}
	$ert1_helper2 = (pow(10, ($ert1_counterREAL-1)));
	for($i=0; $i < $ert1_counterREAL; ++$i) {
		$ert1 += ($ert1_tomb[$i] * $ert1_helper2);
		$ert1_helper2 /= 10;
	}
}

include "_connect.php";

$sql = mysqli_query($connection, "SELECT users.username FROM users
		WHERE username='$nevLogin'");
	
if(mysqli_num_rows($sql)>=1) {
	echo "Ez a felhasználónév már foglalt.
		Kérem válasszon másikat!";
	mysqli_close($connection);
	exit();
}

$sql = "INSERT INTO users (username, jog, teljesnev, email,
	bdate, nem, ert1, ert2, jelszo)
VALUES ('$nevLogin', '$jog', '$nevTeljes', '$email',
	'$bdate', '$nem', '$ert1', '$ert2', '$pass')";


if(mysqli_query($connection, $sql) === TRUE) {
	echo "Sikeres regisztráció!";
} else {
	echo "Nem sikerült a regisztráció,
		kérem később próbálkozzon újra!" . "<br/>\n";
	echo "Error: " . $sql . "<br>" . $connection->error;
}

mysqli_close($connection);

?>