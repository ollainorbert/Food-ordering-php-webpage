<!DOCTYPE html>

<?php
include "scriptz/_connect.php";
mysqli_close($connection);
session_start();
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Kezdőlap</title>
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
	  <li><a class="active" href="index.php">Kezdőlap</a></li>
	  <li><a href="order.php">Ételrendelés</a></li>
	  <li><a href="profil.php">Profil & rendelések</a></li>
	  <li><a href="cart.php">Kosár</a></li>
	</ul>
</nav>
<br><br><br>

<div id="index_body2">
	<aside>
		<a class="kuponClass2" href="kupon.php"><div class="kuponClass">Nyomtatható Kupon!</div></a><br>
		<a class="kuponClass2" href="kupon.php"><div class="kuponClass">Nyomtatható Kupon!</div></a><br>
		<a class="kuponClass2" href="kupon.php"><div class="kuponClass">Nyomtatható Kupon!</div></a><br>
		<a class="kuponClass2" href="kupon.php"><div class="kuponClass">Nyomtatható Kupon!</div></a><br>
	</aside>
	<section>
		<h3>Az NN ételrendelés</h3>
		<p>Az oldalon elküldött rendelések kiszállítása 1 órát vesz igénybe!</p>
	</section>
	<div class="extradiv">
		<table>
			<caption>Nyitvatartás</caption>
			<thead>
				<tr>
					<th>---------</th>
					<th>Hétfő-Péntek</th>
					<th>Hétvége!</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>08:00-16:00</td>
					<td>Nyitva</td>
					<td>Zárva</td>
				</tr>
				<tr>
					<td>16:00-24:00</td>
					<td>Nyitva</td>
					<td>Nyitva</td>
				</tr>
				<tr>
					<td>00:00-08:00</td>
					<td>Zárva</td>
					<td>Nyitva</td>
				</tr>
			</tbody>
			<tfoot></tfoot>
		</table>
	</div>
</div>

<br>
<footer>
	<p>Email: Ollai.Norbert@stud.u-szeged.hu</p>
</footer>

</body>
</html>