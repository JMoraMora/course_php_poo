<?php

class Persona
{
    public string $nombre;
    public ?int $edad;

    public function __construct(string $prop, ?int $prop2)
    {
        $this->nombre = $prop;
        $this->edad = $prop2;
    }
}

$juan = new Persona('Juan', null);
$pepe = new Persona('Pepe', 32);

echo $juan->nombre . '-' . PHP_EOL;
echo $juan->edad . PHP_EOL;

echo $pepe->nombre . PHP_EOL;
echo $pepe->edad . PHP_EOL;
