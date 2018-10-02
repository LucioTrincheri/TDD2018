<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class MazoTest extends TestCase {

    /**
     * Valida que se puedan crear mazos de cartas.
     */
    public function testExiste() {
        $mazo = new Mazo();
        $this->assertTrue(isset($mazo));
    }

    public function testMezclable() {
        $mazo = new Mazo();
        $this->assertTrue($mazo->mezclar());
    }

	public function testIguales() {
        $mazo = new Mazo();
		$mazo2 = $mazo;
		$mazo2->mezclar();
		$this->assertFalse($mazo->iguales($mazo2));
    }

	public function testCantidadCartas(){
		$mazo1 = new Mazo();
		$mazo2 = new Mazo("Poker");
		$mazo3 = new Mazo("Españolas");
		$carta = new Carta(6, "Corazones");
		$mazo1->agregar($carta);
		$this->assertEquals($mazo1->cantidadCartas(),1);
		$this->assertEquals($mazo2->cantidadCartas(),52);
		$this->assertEquals($mazo3->cantidadCartas(),50);
	}

	public function testCortar(){
		$mazo = new Mazo("Poker");
		$carta = $mazo->obtenerCarta(1);
		$mazo->cortar();
		$this->assertNotEquals($carta, $mazo->obtenerCarta(1));
	}

	public function testCarta(){
		$mazo = new Mazo("Poker");
		$this->assertTrue(($mazo->obtenerCarta(4)) instanceof Carta);
		$this->assertFalse($mazo->obtenerCarta(-1));
	}

	public function testNoVacio(){
		$mazo = new Mazo();
		$this->assertFalse($mazo->noVacio());
		$carta = new Carta(9, "Treboles");
		$mazo->agregar($carta);
		$this->assertTrue($mazo->noVacio());
	}

	public function testAgregar(){
		$mazo = new Mazo();
		$carta = new Carta(6 , "Corazones");
		$this->assertTrue($mazo->agregar($carta));
	}

}
