<?php

class Triangulo extends Shape
{
    public function calcularArea()
    {
        return ($this->largo * $this->ancho) / 2;
    }
}
