<?php

class Etel {
	private $nev;
	private $ar;
	
	public function __construct($nev, $ar) {
		$this->nev = $nev;
		$this->ar = $ar;
	}

	public function getNev() {
		return $this->nev;
	}
	public function getAr() {
		return $this->ar;
	}
	
	public function kiiras($name) {
		echo /*"<div>" .*/
			$this->getNev() . ": " . $this->getAr() . "ft !";
			//" Kívánt mennyiség: " .
			//"<input type=\"text\" name=\"" . $this->getNev() . "\" size=\"1\" value=\"\"/>"; .
			/*"</div>";*/
	}
}

include "_connect.php";

$sql = "SELECT * FROM stock";

$result = $connection->query($sql);

$etelekTomb = array();
$i = 0;

//$_SESSION['cart'] = array();

//echo "<form action=\"scriptz/_pakolas_a_cart_ba.php\" method=\"POST\">";
while($row = $result->fetch_assoc()) {
	//$_SESSION['stock'][] = $row;
	$etelekTomb[$i] = new Etel($row["item_name"], $row["item_ar"]);
	$etelekTomb[$i]->kiiras($i);
	++$i;
	echo "<br>" . "<br>";
}
//echo "<input type=\"submit\" name=\"submit\" value=\"Megrendelem!\"/>";
//echo "</form>";

mysqli_close($connection);

?>