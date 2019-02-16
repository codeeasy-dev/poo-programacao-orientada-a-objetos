<?php

require_once "Carro.php";

$carroDoFelipe = new Carro();
$carroDoFelipe->numeroPortas = 4;
$carroDoFelipe->cor = "vermelha";

$carroDoJoao = new Carro();
$carroDoJoao->numeroPortas = 2;
$carroDoJoao->cor = "preta";

$carroDoFelipe->buzinar();
$carroDoFelipe->buzinar();
$carroDoJoao->buzinar();
