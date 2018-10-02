<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class CartaTest extends TestCase {

	public function testPalo(){
		$carta = new Carta(9, "Treboles");
		$this->assertEquals($carta->palo(), "Treboles");
	}


	public function testNumero(){
		$carta = new Carta(9, "Treboles");
		$this->assertTrue(is_int($carta->numero()));
	}


	public function testTipo(){
		$carta = new Carta(9, "Treboles");
		$this->assertEquals($carta->tipo(),"Poker");
	}

}
