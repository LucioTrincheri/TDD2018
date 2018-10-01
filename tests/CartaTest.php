<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class CartaTest extends TestCase {

	public function testPalo(){
		$carta = new Carta("9", "Treboles");
		$this->assertEquals($carta->palo(), "Corazones" || "Treboles" || "Picas" || "Diamantes" || "Bastones" || "Copas" || "Espadas" || "Oro");
	}


	public function testNumero(){
		$carta = new Carta("9", "Treboles");
		$this->assertFalse(isalpha($carta->numero()));
	}


	public function testTipo(){
		$carta = new Carta("9", "Treboles");
		$this->assertEquals($carta->tipo(),"Poker"||"Españolas");
	}

}
