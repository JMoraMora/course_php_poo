<?php 

namespace App\Test;

use App\Service\Cliente;
use App\Service\Cuenta;

class Test 
{
    public function __construct() 
    {
        
    }

    public function exec() 
    {
        # crear cliente
        $cliente = new Cliente('Juan', 'Perez', '12345678');

        # crear cuenta
        $cuenta = new Cuenta('12345678', 1000, 'Ahorro');

        # asignar cuenta al cliente
        $cliente->setCuentaBancaria($cuenta);

        echo 'Cliente: ' . $cliente->getNombre() . ' ' . $cliente->getApellido() . PHP_EOL;
    }
}

$test = new Test();
$test->exec();