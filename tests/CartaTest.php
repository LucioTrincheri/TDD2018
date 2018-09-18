<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class MazoTest extends TestCase {

	public function testPalo(){
		$carta = new Carta;
		$this->assertEquals($carta->palo(), "Corazones" || "Treboles" || "Picas" || "Diamantes" || "Bastones" || "Copas" || "Espadas" || "Oro");
	}


	public function testNumero(){
		$carta = new Carta;
		$this->assertFalse(isalpha($carta->numero()));
	}


	public function testTipo(){
		$carta = new Carta;
		$this->assertEquals($carta->tipo(),"Poker"||"Espaniola");
	}

}
