<?php

abstract class Animal
{
    protected $nombre;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }
}
interface SonidoAnimal
{
    function makeSound();
}

class Perro extends Animal implements SonidoAnimal
{
    public function makeSound()
    {
        echo "$this->nombre dice “Bup, bup!”" . PHP_EOL;
    }
}


class Gato extends Animal implements SonidoAnimal
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



