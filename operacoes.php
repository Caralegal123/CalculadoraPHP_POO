<?php

class Operacoes
{
    private $num1;
    private $num2;
    private $total;

    // Construtor

    function __construct(){
        $this->total = 0;
        $this->num1 = 0;
        $this->num2 = 0;
    }

    // Getters e setters

    public function setNumero1($parametro_numero1){
        $this->num1 = $parametro_numero1;
    }

    public function setNumero2($parametro_numero2){
        $this->num2 = $parametro_numero2;
    }

    public function getTotal(){
        return $this->total;
    }


    // Operações

    public function soma(){
       $this->total = $this->num1 + $this->num2;
    }

    public function subtracao(){
       $this->total = $this->num1 - $this->num2;
    }

    public function divisao(){
        $this->total = $this->num1 / $this->num2;
    }

    public function multiplicacao(){
       $this->total = $this->num1 * $this->num2;
    }
    
    public function potencia(){
        $this->total = $this->num1 * $this->num1 . " 🠔 do primeiro numero" . " || " . "do segundo numero ➝ " . $this->num2 * $this->num2; 
    }

    public function cubo(){
        $this->total = $this->num1 * $this->num1 * $this->num1 . " 🠔 do primeiro numero" . " || " . "do segundo numero ➝ " . $this->num2 * $this->num2 * $this->num2; 

    }

    public function raiz(){
        $this->total = sqrt($this->num1) . " 🠔 do primeiro numero" . " || " . "do segundo numero ➝ " . sqrt($this->num2);
    }

    public function seno(){
        $this->total = sin($this->num1) . " 🠔 do primeiro numero" . " || " . "do segundo numero ➝ " . sin($this->num2);
    }

    public function cos(){
        $this->total = cos($this->num1) . " 🠔 do primeiro numero" . " || " . "do segundo numero ➝ " . cos($this->num2);
    }

    public function tan(){
       $this->total = tan($this->num1) . " 🠔 do primeiro numero" . " || " . "do segundo numero ➝ " . tan($this->num2);
    }

    public function log(){
        $this->total = log($this->num1) . " 🠔 do primeiro numero" . " || " . "do segundo numero ➝ " . log($this->num2);
    }
}