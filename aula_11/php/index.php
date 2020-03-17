<?php

require_once __DIR__ . "/Dynamic/Vehicle.php";
require_once __DIR__ . "/Dynamic/Car.php";
require_once __DIR__ . "/Dynamic/Plane.php";
require_once __DIR__ . "/Dynamic/Boat.php";

function move(Vehicle $vehicle): void
{
    echo $vehicle->action();
}

$class = readline("Escolha o veículo: ");

$object = new $class();

move($object);
