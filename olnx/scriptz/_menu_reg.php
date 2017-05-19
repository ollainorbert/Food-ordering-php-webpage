<?php

if(isset($_SESSION['use'])) {
	echo "Kijelentkezés";
} else {
	echo "Regisztáció";
}

?>