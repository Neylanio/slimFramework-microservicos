<?php
require_once "Usuario.php";


$valor = 10;
$valor = "10";
$valor = 10.0;

$valor = new Usuario("Matthias", 69);

$valor = [
    "um" => 1, 
    2, 
    "dois" => "qwerty", 
    new Usuario("Matthias", 69)
];
$valor["novo valor"] = "Próximo valor";
array_push($valor, "Valor via push");

// var_dump($valor);

// echo "<pre>".print_r($valor, true)."</pre>";





// include, include_once, require, require_once


$valor = "VALOR INICIAL";

include "teste_importacao.php";

echo $valor;


















