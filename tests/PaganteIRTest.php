<?php
namespace tests;

use app\PaganteIR;
use PHPUnit\Framework\TestCase;

class PaganteIRTest extends TestCase{

    public function testPaganteName(){
        $p1 = new PaganteIR("Gustavo","Joia",48059265890,24899);

        $this->assertEquals("Gustavo", $p1->getNome());
        $this->assertEquals("Joia", $p1->getSobrenome());
    }

    public function testPaganteCpf(){
        $p1 = new PaganteIR("Gustavo","Joia",48059265890,24899);
        
        $this->assertEquals(48059265890, $p1->getCpf());
    }

    public function testPaganteIsento(){
        $p1 = new PaganteIR("Gustavo","Joia",48059265890,22800);
        $dados = $p1->calcularDivida();
        $this->assertEquals(0, $dados[1]);
    }

    public function testPaganteUm(){
        $p1 = new PaganteIR("Gustavo","Joia",48059265890,22900);
        $dados = $p1->calcularDivida();
        $this->assertEquals(7.5, $dados[1]);
    }

    public function testPaganteDois(){
        $p1 = new PaganteIR("Gustavo","Joia",48059265890,33950);
        $dados = $p1->calcularDivida();
        $this->assertEquals(15, $dados[1]);
    }

    public function testPaganteTres(){
        $p1 = new PaganteIR("Gustavo","Joia",48059265890,46000);
        $dados = $p1->calcularDivida();
        $this->assertEquals(22.5, $dados[1]);
    }

    public function testPaganteQuatro(){
        $p1 = new PaganteIR("Gustavo","Joia",48059265890,56000);
        $dados = $p1->calcularDivida();
        $this->assertEquals(27.5, $dados[1]);
    }

}


?>