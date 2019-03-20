<?php

require_once __DIR__ . "/Bhaskara.php";

$a = 2;
$b = 10;
$c = 5;

$bhaskara = new Bhaskara();
try {
    $resultado = $bhaskara->calcular($a, $b, $c);
} catch (\Exception $ex) {
    echo $ex->getMessage();
    die;
}

var_dump($resultado);
