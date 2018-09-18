<?php

namespace TDD;

class Mazo {

	protected mazo;
	protected max;
	protected cantidad;
	protected arraypoker = {new Carta("As", "de Corazones"),new Carta(2, "de Corazones"),new Carta(3, "de Corazones"),new Carta(4, "de Corazones"),new Carta(5, "de Corazones"),new Carta(6, "de Corazones"),new Carta(7, "de Corazones"),new Carta(8, "de Corazones"),new Carta(9, "de Corazones"),new Carta("J", "de Corazones"),new Carta("Q", "de Corazones"),new Carta("K", "de Corazones"),new Carta("As", "de Picas"),new Carta(2, "de Picas"),new Carta(3, "de Picas"),new Carta(4, "de Picas"),new Carta(5, "de Picas"),new Carta(6, "de Picas"),new Carta(7, "de Picas"),new Carta(8, "de Picas"),new Carta(9, "de Picas"),new Carta("J", "de Picas"),new Carta("Q", "de Picas"),new Carta("K", "de Picas"),new Carta("As", "de Treboles"),new Carta(2, "de Treboles"),new Carta(3, "de Treboles"),new Carta(4, "de Treboles"),new Carta(5, "de Treboles"),new Carta(6, "de Treboles"),new Carta(7, "de Treboles"),new Carta(8, "de Treboles"),new Carta(9, "de Treboles"),new Carta("J", "de Treboles"),new Carta("Q", "de Treboles"),new Carta("K", "de Treboles"),new Carta("As", "de Diamantes"),new Carta(2, "de Diamantes"),new Carta(3, "de Diamantes"),new Carta(4, "de Diamantes"),new Carta(5, "de Diamantes"),new Carta(6, "de Diamantes"),new Carta(7, "de Diamantes"),new Carta(8, "de Diamantes"),new Carta(9, "de Diamantes"),new Carta("J", "de Diamantes"),new Carta("Q", "de Diamantes"),new Carta("K", "de Diamantes"),}
	protected arrayespaniolas = {new Carta(1, ""),new Carta(2, ""),new Carta(3, ""),new Carta(4, ""),new Carta(5, ""),new Carta(6, ""),new Carta(7, ""),new Carta(8, ""),new Carta(9, ""),new Carta(10, ""),new Carta(11, ""),new Carta(12, ""),new Carta(1, ""),new Carta(2, ""),new Carta(3, ""),new Carta(4, ""),new Carta(5, ""),new Carta(6, ""),new Carta(7, ""),new Carta(8, ""),new Carta(9, ""),new Carta(10, ""),new Carta(11, ""),new Carta(12, ""),new Carta(1, ""),new Carta(2, ""),new Carta(3, ""),new Carta(4, ""),new Carta(5, ""),new Carta(6, ""),new Carta(7, ""),new Carta(8, ""),new Carta(9, ""),new Carta(10, ""),new Carta(11, ""),new Carta(12, ""),new Carta(1, ""),new Carta(2, ""),new Carta(3, ""),new Carta(4, ""),new Carta(5, ""),new Carta(6, ""),new Carta(7, ""),new Carta(8, ""),new Carta(9, ""),new Carta(10, ""),new Carta(11, ""),new Carta(12, ""),new Carta("Comodin", "Comodin"),new Carta("Comodin", "Comodin")}
	 
	public function __construct($tipo){
		if($tipo == "Poker"){
			$this->max = 52;
			$this->cantidad = 52;
			$this->mazo = arraypoker;
			return ;
		}
		$this->max = 50;
		$this->cantidad = 50;
		$this->mazo = arrayespaniolas;
	}

    public function mezclar() {
        
    }

	public function iguales($mazo2) {
        return ($this->mazo == $mazo2);
    }

	public function cantidadCartas(){
		return $this->cantidad;
	}

	public function obtenerCarta(){
		

	}

	public function noVacio(){
		
	}

	public function agregar(){
		
	}
}
