<?php

class Circulo extends Shape
{
    public function calcularArea()
    {
        return pi() * pow($this->ancho, 2);
    }

}
