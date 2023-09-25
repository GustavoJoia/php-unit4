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

    public function testPaganteRendimento(){
        $p1 = new PaganteIR("Gustavo","Joia",48059265890,24899);
        
        $this->assertEquals(24899, $p1->getRendimento());
    }

}


?>