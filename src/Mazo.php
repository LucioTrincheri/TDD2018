<?php

namespace TDD;

class Mazo {
	protected mazo;
	protected cantidad;
	protected tipo;
	protected ultimaCarta;
	protected arraypoker = {new Carta("As", "Corazones"),new Carta(2, "Corazones"),new Carta(3, "Corazones"),new Carta(4, "Corazones"),new Carta(5, "Corazones"),new Carta(6, "Corazones"),new Carta(7, "Corazones"),new Carta(8, "Corazones"),new Carta(9, "Corazones"),new Carta("J", "Corazones"),new Carta("Q", "Corazones"),new Carta("K", "Corazones"),new Carta("As", "Picas"),new Carta(2, "Picas"),new Carta(3, "Picas"),new Carta(4, "Picas"),new Carta(5, "Picas"),new Carta(6, "Picas"),new Carta(7, "Picas"),new Carta(8, "Picas"),new Carta(9, "Picas"),new Carta("J", "Picas"),new Carta("Q", "Picas"),new Carta("K", "Picas"),new Carta("As", "Treboles"),new Carta(2, "Treboles"),new Carta(3, "Treboles"),new Carta(4, "Treboles"),new Carta(5, "Treboles"),new Carta(6, "Treboles"),new Carta(7, "Treboles"),new Carta(8, "Treboles"),new Carta(9, "Treboles"),new Carta("J", "Treboles"),new Carta("Q", "Treboles"),new Carta("K", "Treboles"),new Carta("As", "Diamantes"),new Carta(2, "Diamantes"),new Carta(3, "Diamantes"),new Carta(4, "Diamantes"),new Carta(5, "Diamantes"),new Carta(6, "Diamantes"),new Carta(7, "Diamantes"),new Carta(8, "Diamantes"),new Carta(9, "Diamantes"),new Carta("J", "Diamantes"),new Carta("Q", "Diamantes"),new Carta("K", "Diamantes")}
	protected arrayespaniolas = {new Carta(1, "Oro"),new Carta(2, "Oro"),new Carta(3, "Oro"),new Carta(4, "Oro"),new Carta(5, "Oro"),new Carta(6, "Oro"),new Carta(7, "Oro"),new Carta(8, "Oro"),new Carta(9, "Oro"),new Carta(10, "Oro"),new Carta(11, "Oro"),new Carta(12, "Oro"),new Carta(1, "Espada"),new Carta(2, "Espada"),new Carta(3, "Espada"),new Carta(4, "Espada"),new Carta(5, "Espada"),new Carta(6, "Espada"),new Carta(7, "Espada"),new Carta(8, "Espada"),new Carta(9, "Espada"),new Carta(10, "Espada"),new Carta(11, "Espada"),new Carta(12, "Espada"),new Carta(1, "Basto"),new Carta(2, "Basto"),new Carta(3, "Basto"),new Carta(4, "Basto"),new Carta(5, "Basto"),new Carta(6, "Basto"),new Carta(7, "Basto"),new Carta(8, "Basto"),new Carta(9, "Basto"),new Carta(10, "Basto"),new Carta(11, "Basto"),new Carta(12, "Basto"),new Carta(1, "Copa"),new Carta(2, "Copa"),new Carta(3, "Copa"),new Carta(4, "Copa"),new Carta(5, "Copa"),new Carta(6, "Copa"),new Carta(7, "Copa"),new Carta(8, "Copa"),new Carta(9, "Copa"),new Carta(10, "Copa"),new Carta(11, "Copa"),new Carta(12, "Copa"),new Carta("Comodin", "Comodin"),new Carta("Comodin", "Comodin")}
	 
	public function __construct($tipo=NULL){
		$this->tipo = $tipo;
		if($tipo == "Poker"){
			$this->cantidad = 52;
			$this->mazo = arraypoker;
		}
		if($tipo=="Españolas"){
			$this->cantidad = 50;
			$this->mazo = arrayespaniolas;
		}
	}

    public function mezclar() {
        return shuffle($this->mazo);
    }

	public function cortar(){
		$offset = rand(1, $this->cantidad - 1);
		$this->mazo = array_merge(array_slice($this->mazo, $offset), array_slice($this->mazo, 0, $offset));
		return True;
	}

	public function iguales($mazo2) {
        return ($this->mazo === $mazo2);
    }

	public function cantidadCartas(){
		return $this->cantidad;
	}

	public function obtenerCarta($valor){
		if($valor > 0 && $valor <= $this->cantidad)
			return $this->mazo[$valor - 1];
		
		return False;
	}

	public function noVacio(){
		return (count($this->mazo) != 0)
	}

	public function agregar($carta){
		push($this->mazo, $carta);
		$this->cantidad +=1;
		return True;
	}
}
