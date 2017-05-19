<?php

class Velemeny {
	private $username;
	private $velemeny;
	private $Xdatum;
	
	public function __construct($username, $velemeny, $Xdatum) {
		$this->username = $username;
		$this->velemeny = $velemeny;
		$this->Xdatum = $Xdatum;
	}

	public function getUsername() {
		return $this->username;
	}
	public function getVelemeny() {
		return $this->velemeny;
	}
	public function getXdatum() {
		return $this->Xdatum;
	}
	
	public function kiiras() {
		echo $this->getUsername() . " írta: " . "<br>" .
			$this->getVelemeny() . "<br>" .
			"ekkor: " . $this->getXdatum();
	}
}

?>