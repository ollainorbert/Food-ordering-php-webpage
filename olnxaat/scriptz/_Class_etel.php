<?php

class Etel {
	private $nev;
	private $darab_szam;
	private $ar;
	
	public function __construct($nev, $darab_szam, $ar) {
		$this->nev = $nev;
		$this->darab_szam = $darab_szam;
		$this->ar = $ar;
	}

	public function getNev() {
		return $this->nev;
	}
	public function getDarab_szam() {
		return $this->darab_szam;
	}
	public function getAr() {
		return $this->ar;
	}
	
	public function ossz() {
		return ($this->getDarab_szam() * $this->getAr());
	}
	
	public function kiiras() {
		echo $this->getNev() . ", " . $this->getDarab_szam() . "db (" .
		$this->getAr() . "/db): " . $this->ossz() .
		"ft !";
	}
}

?>