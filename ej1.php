<?php
/*- Ejercicio 1
Necesitamos crear un tipo de datos que represente a un animal. 
Los animales tienen un nombre, sin embargo, no es lo mismo el sonido del “habla” de un perro, que el 
de un gato. Por tanto, necesitamos crear otros tipos de datos que nos ayuden a programar estos 
comportamientos. Básicamente, queremos un método makeSound() que muestre un mensaje diferente si se trata 
de un perro (por ejemplo, “Bup, bup!”) o un gato (por ejemplo “Mi!”).*/

$perro = new Perro("Boss");
$perro->makeSound();

$gato = new Gato("Garfy");
$gato->makeSound();

class Animal
{
    protected $nombre;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }
    public function makeSound()
    {
        echo "Sonido de animal: " . PHP_EOL;
    }
}

class Perro extends Animal
{
    public function makeSound()
    {
        echo "$this->nombre dice “Bup, bup!”" . PHP_EOL;
    }
}

class Gato extends Animal
{
    public function makeSound()
    {
        echo "$this->nombre dice “Miau!”" . PHP_EOL;
    }
}



