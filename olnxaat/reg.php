<!DOCTYPE html>

<?php
	session_start();
	if(isset($_SESSION['use'])) {
		session_destroy();
		header("Location:index.php");
	}
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Regisztráció</title>
	<link rel="stylesheet" type="text/css" href="css/regNkupon.css">
	
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
		<a href="reg.php"><div id="fejlec_regBelepes_reg">Regisztáció</div></a>
		<a href="belepes.php"><div id="fejlec_regBelepes_Belepes">Belépés</div></a>
	</div>
</header>
<br>

<nav></nav>

<article>
	<br>
	<h3>Regisztráció:</h3>

	<form action="reg_result.php" method="post">
		<label>Bejelentkezési név:
			<input type="text" name="nev" value="" placeholder="Felhasználó név" maxlength="20" autofocus tabindex="1" required/>
		</label> <br/>
	
		<label>Teljes név:
			<input type="text" name="nev2" value="" placeholder="Teljes név" maxlength="25" tabindex="2" required/>
		</label> <br/>
		
		<label>E-mail:
			<input type="email" name="email" value="" placeholder="E-mail"
			pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"
			title="valami@valamihost.com"
			tabindex="3" required/>
		</label> <br/>
		
		<label>Születési dátum:
			<input type="text" name="bdate" value="" placeholder="1900-01-01"
			pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}"
			title="1900-01-01"
			maxlength="10" tabindex="4" required/>
		</label> <br/>
		
		<label for="radio1_id1">Férfi: </label>
			<input type="radio" id="radio1_id1" name="nem" value="1" tabindex="5" checked/>
		<label for="radio1_id2">Nő: </label>
			<input type="radio" id="radio1_id2" name="nem" value="2"/>
		<label for="radio1_id3">Egyéb: </label>
			<input type="radio" id="radio1_id3" name="nem" value="3"/> <br/>
		
		<fieldset>
			<legend>Milyen ételfajtákról szeretnél értesítést?</legend>
			<label for="checkbox1">Levesek: </label>
				<input type="checkbox" id="checkbox1" name="ert[]" value="1" tabindex="6"/> <br/>
			<label for="checkbox2">Húsfélék: </label>
				<input type="checkbox" id="checkbox2" name="ert[]" value="2" tabindex="7"/> <br/>
			<label for="checkbox3">Zöldségkörete: </label>
				<input type="checkbox" id="checkbox3" name="ert[]" value="3" tabindex="8"/> <br/>
			<label for="checkbox4">Főzelékek: </label>
				<input type="checkbox" id="checkbox4" name="ert[]" value="4" tabindex="9"/> <br/>
			<label for="checkbox5">Pizzák: </label>
				<input type="checkbox" id="checkbox5" name="ert[]" value="5" tabindex="10"/> <br/>
		</fieldset>
		
		<label for="select1">Milyen időközönként szeretnél értesítést?</label><br>
			(Amennyiben nem jelölt meg ételfajtát, csak a szuper akciók lesznek kiküldve.)
		<select name="ert2" id="select1" tabindex="11" required>
			<option selected disabled value="">Válassz!</option>
			<option value="1">Minden napszakban</option>
			<option value="2">Minden nap</option>
			<option value="3">Hetente</option>
			<option value="4">Csak akciókról</option>
			<option value="5">Soha</option>
		</select> <br/><br><br>

		<label for="pwid">Jelszó: </label>
			<input type="password" name="pw" id="pwid" value="" placeholder="jelszó"
				pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
				title="Tartalmaznia kell minimum egy számot, egy kisbetűt és egy nagybetűt,
					illetve legalább 8 karakter hosszúnak kell lennie!"
				maxlength="20" tabindex="12" required/> <br/>
			<input type="hidden" name="rejtett" value="igen"/> <br/>
			
		<label for="pwid2">Jelszó ismét: </label>
			<input type="password" name="pw2" id="pwid2" value="" placeholder="jelszó ismét"
				pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
				maxlength="20" tabindex="13" required/> <br/>
			<input type="hidden" name="rejtett" value="igen"/> <br/><br>
		
		<input type="reset" value="Törlés" tabindex="14"/>
		<input type="submit" value="Küldés" tabindex="15"/> <br/>
		
	</form>
	<br><br><br>
</article>

<br>
<footer>
	<p>Email: Ollai.Norbert@stud.u-szeged.hu</p>
</footer>

</body>
</html>