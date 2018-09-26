<?php

namespace TDD;

class Carta {

	protected $numero;
	protected $palo;

	public function __construct($numero=NULL, $palo=NULL){
		$this->numero = $numero;
		$this->palo = $palo;
	}
}
