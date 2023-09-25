<?php
namespace tests;

use app\IMC;
use PHPUnit\Framework\TestCase;

class ImcTest extends TestCase{

    public function testImcInput(){
        $p1 = new IMC(50,1.63);

        $this->assertEquals(1.63, $p1->getAltura());
        $this->assertEquals(50, $p1->getPeso());
    }

    public function testImcAbaixo(){
        $p1 = new IMC(45,1.63);

        $this->assertEquals(1.63, $p1->getAltura());
        $this->assertEquals(45, $p1->getPeso());
        $this->assertEquals(16.9, $p1->getValor());
        $this->assertEquals("Abaixo do peso", $p1->getPercentual());
    }

    public function testImcNormal(){
        $p1 = new IMC(50,1.63);

        $this->assertEquals(1.63, $p1->getAltura());
        $this->assertEquals(50, $p1->getPeso());
        $this->assertEquals(18.8, $p1->getValor());
        $this->assertEquals("Peso normal", $p1->getPercentual());
    }

    public function testImcAcima(){
        $p1 = new IMC(68,1.63);

        $this->assertEquals(1.63, $p1->getAltura());
        $this->assertEquals(68, $p1->getPeso());
        $this->assertEquals(25.6, $p1->getValor());
        $this->assertEquals("Excesso de peso", $p1->getPercentual());
    }

    public function testImcObsI(){
        $p1 = new IMC(80,1.63);

        $this->assertEquals(1.63, $p1->getAltura());
        $this->assertEquals(80, $p1->getPeso());
        $this->assertEquals(30.1, $p1->getValor());
        $this->assertEquals("Obesidade I", $p1->getPercentual());
    }

    public function testImcObsII(){
        $p1 = new IMC(100,1.63);

        $this->assertEquals(1.63, $p1->getAltura());
        $this->assertEquals(100, $p1->getPeso());
        $this->assertEquals(37.6, $p1->getValor());
        $this->assertEquals("Obesidade II", $p1->getPercentual());
    }

    public function testImcObsIII(){
        $p1 = new IMC(150,1.63);

        $this->assertEquals(1.63, $p1->getAltura());
        $this->assertEquals(150, $p1->getPeso());
        $this->assertEquals(56.5, $p1->getValor());
        $this->assertEquals("Obesidade III", $p1->getPercentual());
    }
  
}


?>