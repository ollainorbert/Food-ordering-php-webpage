<?php

session_start();
if(isset($_SESSION['use'])) {
    header("Location:index.php"); 
}

$nevLogin = $_POST['nev'];
$pass = $_POST['pw'];

include "_connect.php";

$sql = mysqli_query($connection, "SELECT users.username FROM users
		WHERE username='$nevLogin' AND jelszo='$pass'");
//mysqli_close($connection);

if(mysqli_num_rows($sql) == 1) {
	$_SESSION['use'] = $nevLogin;
	mysqli_close($connection);
	header("Location:../index.php");
} else {
	echo "Rossz felhasználónév vagy jelszó!";
}

mysqli_close($connection);

header("Refresh: 2; URL=../belepes.php");

?>