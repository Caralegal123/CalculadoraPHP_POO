<?php

$num1 = $_POST['1num'];
$num2 = $_POST['2num'];
$op = $_POST['operacao'];

require_once 'operacoes.php';

// Checando se um numero foi inserido
if (($num1 || $num2) == empty($_POST)) {
    echo "<script type='text/javascript'>alert('Nenhum numero inserido!!!');</script>";
    echo "<br>";

}

// Checando se nenhum numero foi inserido

if (($num1 && $num2) == empty($_POST)){
    echo "<script type='text/javascript'>alert('Nenhum numero inserido!!!');</script>";
    echo "<br>";
}

// Checando se uma operação foi selecionada
if ($op == empty($_POST)) {
    echo "<script type='text/javascript'>alert('Nenhuma operação selecionada');</script>";
    echo "<br>";

}

switch($op){
    case "adicao":
        $operacoes->soma();
    break;
    case "subtracao":
        $operacoes->subtracao();
    break;
    case "multiplicacao":
        $operacoes->multiplicacao();
    break;
    case "divisao":
        $operacoes->divisao();
    break;
    case "potencia":
        $operacoes->potencia();
    break;
    case "cubo":
        $operacoes->cubo();
    break;
    case "raiz":
        $operacoes->raiz();
    break;
    case "seno":
        $operacoes->seno();
    break;
    case "cos":
        $operacoes->cos();
    break;
    case "tan":
        $operacoes->tan();
    break;
    case "log":
        $operacoes->log();
    break;
}  

// Criando um novo objeto operações

$operacoes = new Operacoes();

$operacoes->setNumero1($num1);
$operacoes->setNumero2($num2);

echo "O resultado da operação $op é: " . $operacoes->getTotal();

