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
	<title>Profil&Rendelések</title>
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
	  <li><a href="order.php">Ételrendelés</a></li>
	  <li><a class="active" href="profil.php">Profil & rendelések</a></li>
	  <li><a href="cart.php">Kosár</a></li>
	</ul>
</nav>
<br><br><br>

<article>
	<br>
	<h3>Profil & rendelések:</h3><br>
	<h4>Személyes adatok:</h4>
	<?php include "scriptz/_szemelyes_adatok.php"; ?>
	<p>Ha szeretne jelszót módosítani, ide írja be az új jelszót!<p>
	<form action="scriptz/_pass_change.php" method="GET">
		<input type="password" name="pw" id="pwid" value="" placeholder="új jelszó"
			pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
			title="Tartalmaznia kell minimum egy számot, egy kisbetűt és egy nagybetűt,
				illetve legalább 8 karakter hosszúnak kell lennie!"
			maxlength="20" tabindex="12" required/> <br/>
		<input type="hidden" name="rejtett" value="igen"/> <br/>
		<input type="submit" name="modif" value="Jelszó módosításának megerősítése"/> <br/>
	</form>
	
	<br><br>
	
	<h4>Rendelések:</h4>
	<?php include "/scriptz/_orders_list.php"; ?>
	<br><br><br>
</article>

<br>
<footer>
	<p>Email: Ollai.Norbert@stud.u-szeged.hu</p>
</footer>

</body>
</html>