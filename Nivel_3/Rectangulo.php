<?php

class Rectangulo extends Shape
{
    public function calcularArea()
    {
        return ($this->ancho * $this->largo);
    }
}
