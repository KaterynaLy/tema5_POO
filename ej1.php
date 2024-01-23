<?php

abstract class Animal
{
    protected $nombre;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }
    public function makeSound()
    {
        echo "Sonido : " . PHP_EOL;
    }
}
interface SonidoInterface
{
    function makeSound();

}

class Perro extends Animal implements SonidoInterface
{
    public function makeSound()
    {
        echo "$this->nombre dice “Bup, bup!”" . PHP_EOL;
    }
}


class Gato extends Animal implements SonidoInterface
{
    public function makeSound()
    {
        echo "$this->nombre dice “Miau!”" . PHP_EOL;
    }
}

$perro = new Perro("Boss");
$perro->makeSound();

$gato = new Gato("Garfy");
$gato->makeSound();



