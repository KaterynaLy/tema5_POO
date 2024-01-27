<?php

include("Shape.php");
include "Circulo.php";
include "Triangulo.php";
include "Rectangulo.php";


$circulo = new Circulo(5);
echo "Area circulo: " . $circulo->calcularArea() . PHP_EOL;
$triangulo = new Triangulo(3, 6);
echo "Area del triangulo: " . $triangulo->calcularArea() . PHP_EOL;
$rectangulo = new Rectangulo(3, 6);
echo "Area del rectangulo: " . $rectangulo->calcularArea() . PHP_EOL;
