<?php
namespace app;

class Imc{
    private $peso;
    private $altura;
    private $valor;
    private $percentual;

    public function __construct($peso, $altura){
        $this->peso = $peso;
        $this->altura = $altura;
        $this->valor = $this->peso/($this->altura*$this->altura);
        $this->definir($this->valor);
    }

    public function getPeso(){
        return $this->peso;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function getValor(){
        return $this->valor;
    }

    public function getPercentual(){
        return $this->percentual;
    }

    public function definir($valor){

        if ($valor < 18.5) {
            $this->percentual = "Abaixo do peso";
        } else if ($valor < 25) {
            $this->percentual = "Peso normal";
        } else if ($valor < 30) {
            $this->percentual = "Excesso de peso";
        } else if ($valor < 35) {
            $this->percentual = "Obesidade I";
        } else if ($valor < 40) {
            $this->percentual = "Obesidade II";
        } else {
            $this->percentual = "Obesidade III";
        }
    }

    public function array(){
        return [
            'peso' => $this->peso,
            'altura' => $this->altura,
            'valor' => $this->valor,
            'percentual' => $this->percentual
        ];
    }

}

?>