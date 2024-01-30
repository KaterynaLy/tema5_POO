<?php

include("Shape.php");
include("Rectangulo.php");
include("Triangulo.php");

$rectangulo = new Rectangulo(7, 10);
echo "Área del Rectángulo: " . $rectangulo->calcularArea() . PHP_EOL;

$triangulo = new Triangulo(4, 6);
echo "Área del Triángulo: " . $triangulo->calcularArea() . PHP_EOL;