<!DOCTYPE html>

<?php
session_start();
	if(!isset($_SESSION['use'])) {
		header("Location:belepes.php");
	}
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Rendelés</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	
	<link rel="icon" type="image/png" href="favicon-196x196.png" sizes="196x196" />
	<link rel="icon" type="image/png" href="favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/png" href="favicon-128.png" sizes="128x128" />
	<meta name="application-name" content="&nbsp;"/>
	<meta name="msapplication-TileColor" content="#FFFFFF" />
	<meta name="msapplication-TileImage" content="mstile-144x144.png" />
	<meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
	<meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
	<meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
	<meta name="msapplication-square310x310logo" content="mstile-310x310.png" />
</head>
<body>

<header>
	<a href="index.php"><div id="fejlec_nev">NN ételrendelés</div></a>
	<div id="fejlec_regBelepes">
		<a href="reg.php"><div id="fejlec_regBelepes_reg">
			<?php include "scriptz/_menu_reg.php"; ?>
		</div></a>
		<?php include "scriptz/_menu_belepes.php"; ?>
	</div>
</header>
<br>

<nav>
	<ul>
	  <li><a href="index.php">Kezdőlap</a></li>
	  <li><a class="active" href="order.php">Ételrendelés</a></li>
	  <li><a href="profil.php">Profil & rendelések</a></li>
	  <li><a href="cart.php">Kosár</a></li>
	</ul>
</nav>
<br><br><br>

<article>
	<br>
	<h3>Ugrás az ételek véleményezéséhez és véleményeik olvasására:</h3>
	<form action="velemenyek.php" method="GET">
		Írja be a kívánt étel nevét:
		<input type="text" name="tipus" value="" size="5"/><br><br>
		<input type="submit" name="submit" value="Mehet!"/>
	</form>
	<br><br><br>
	<h3>Kínálat:</h3>
	<br><br><br>
	<?php include "scriptz/_keszlet_listazasa.php"; ?>
	<br><br><br>
	<form action="scriptz/_pakolas_a_cart_ba.php" method="GET">
		Írja be a kívánt étel nevét:
		<input type="text" name="fajta" value="" size="5"/><br>
		Majd a belőle kívánt darabszámot:
		<input type="text" name="dbszam" value="" size="1"/><br><br>
		<input type="submit" name="submit" value="Megrendelem!"/>
	</form>
	<br><br><br>
</article>

<br>
<footer>
	<p>Email: Ollai.Norbert@stud.u-szeged.hu</p>
</footer>

</body>
</html>