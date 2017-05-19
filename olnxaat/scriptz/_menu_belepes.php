<?php

if(isset($_SESSION['use'])) {
	echo "<div id=\"fejlec_regBelepes_Belepes\">" . $_SESSION['use'] . "</div>";
} else {
	echo "<a href=\"belepes.php\"><div id=\"fejlec_regBelepes_Belepes\">Belépés</div></a>";
}

?>