<?php

$rectangulo = new Rectangulo(7, 10);
echo "Área del Rectángulo: " . $rectangulo->calcularArea() . PHP_EOL;

$triangulo = new Triangulo(4, 6);
echo "Área del Triángulo: " . $triangulo->calcularArea() . PHP_EOL;
abstract class Shape
{
    protected $ancho;
    protected $alto;
    public function __construct($ancho, $alto)
    {
        $this->ancho = $ancho;
        $this->alto = $alto;
    }

    public function calcularArea()
    {
        return 0;
    }
}

class Triangulo extends Shape
{
    public function calcularArea()
    {
        return ($this->alto * $this->ancho) / 2;
    }
}
class Rectangulo extends Shape
{
    public function calcularArea()
    {
        return $this->alto * $this->ancho;
    }
}