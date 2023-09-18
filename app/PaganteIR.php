<?php
namespace app;

class PaganteIR{

    private $nome;
    private $sobrenome;
    private $cpf;
    private $rendimento;

    public function __construct($nome, $sobrenome, $cpf, $rendimento){
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->cpf = $cpf;
        $this->rendimento = $rendimento;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getSobrenome(){
        return $this->sobrenome;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function getRendimento(){
        return $this->rendimento;
    }

    public function getAliquota(){
        return $this->aliquota;
    }

    public function getDivida(){
        return $this->divida;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setSobrenome($sobrenome){
        $this->sobrenome = $sobrenome;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function setRendimento($rendimento){
        $this->rendimento = $rendimento;
    }

    public function setAliquota($aliquota){
        $this->aliquota = $aliquota;
    }

    public function setDivida($divida){
        $this->divida = $divida;
    }

}


?>