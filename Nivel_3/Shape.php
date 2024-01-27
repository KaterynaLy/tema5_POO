<?php

abstract class Shape
{
    protected $ancho;
    protected $largo;

    public function __construct($ancho, $largo)
    {
        $this->ancho = $ancho;
        $this->largo = $largo;
    }
    public abstract function calcularArea();
}
