<?php

namespace TDD;

class Carta {

	protected $numero;
	protected $palo;

	public function __construct($numero=NULL, $palo=NULL){
		$this->numero = $numero;
		$this->palo = $palo;
		if($palo == "Treboles" || $palo == "Diamantes" || $palo == "Picas" || $palo == "Corazones"){
			$this->tipo = "Poker"
		}else{
			$this->tipo = "Españolas"
		}
	}

	public function palo(){
		return $this->palo;	
	}

	public function numero(){
		return $this->numero;
	}

	public function tipo(){
		return $this->tipo;
	}
}
