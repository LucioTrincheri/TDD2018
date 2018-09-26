<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class MazoTest extends TestCase {

    /**
     * Valida que se puedan crear mazos de cartas.
     */
    public function testExiste() {
        $mazo = new Mazo;
        $this->assertTrue(isset($mazo));
    }

    public function testMezclable() {
        $mazo = new Mazo;
        $this->assertTrue($mazo->mezclar());
    }

	public function testIguales() {
        $mazo = new Mazo;
		$mazo2 = $mazo;
		$mazo2->mezclar();
		$this->assertFalse($mazo->iguales($mazo2));
    }

	public function testCantidadCartas(){
		$mazo = new Mazo;
		$this->assertEquals($mazo->cantidadCartas(),40);
	}

	public function testCarta(){
		$mazo = new Mazo;
		$this->assertTrue(($mazo->obtenerCarta()) instanceof Carta);
	}

	public function testNoVacio(){
		$mazo = new Mazo;
		$this->assertTrue($mazo->noVacio());
	}

	public function testAgregar(){
		$mazo = new Mazo;
		$carta = new Carta(6, "Corazones");
		$this->assertTrue($mazo->agregar($carta));
	}

}
