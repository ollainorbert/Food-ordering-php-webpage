<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Kupon!!!</title>
	<link rel="stylesheet" type="text/css" href="css/regNkupon.css">
	<link rel="stylesheet" type="text/css" href="css/printable.css">
	
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
		<?php session_start(); ?>
		<a href="reg.php"><div id="fejlec_regBelepes_reg">
			<?php include "scriptz/_menu_reg.php"; ?>
		</div></a>
		<?php include "scriptz/_menu_belepes.php"; ?>
	</div>
</header>
<br>

<nav></nav>

<article>
	<br>
	<h3>Kupon:</h3>
	<img src="picture_pizza.png" alt="Pizza"/>
	<p id="kuponErtek">! 500 FT KUPON !</p>
	<br><br><br>
</article>

<br>
<footer>
	<p>Email: Ollai.Norbert@stud.u-szeged.hu</p>
</footer>

</body>
</html>