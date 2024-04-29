<?php 

namespace App\Service;

class Cuenta 
{
    private $numeroCuenta;
    private $saldo;
    private $tipoCuenta;

    private Cliente $titular;

    public function __construct($numeroCuenta, $saldo, $tipoCuenta) 
    {
        $this->numeroCuenta = $numeroCuenta;
        $this->saldo = $saldo;
        $this->tipoCuenta = $tipoCuenta;
    }

    public function getNumeroCuenta() 
    {
        return $this->numeroCuenta;
    }

    public function getSaldo() 
    {
        return $this->saldo;
    }

    public function getTipoCuenta() 
    {
        return $this->tipoCuenta;
    }

    public function getTitular() 
    {
        return $this->titular;
    }

    public function setNumeroCuenta($numeroCuenta) 
    {
        $this->numeroCuenta = $numeroCuenta;
    }

    public function setSaldo($saldo) 
    {
        $this->saldo = $saldo;
    }

    public function setTipoCuenta($tipoCuenta) 
    {
        $this->tipoCuenta = $tipoCuenta;
    }

    public function setTitular($titular) 
    {
        $this->titular = $titular;
    }

    public function depositar($monto) 
    {
        $this->saldo += $monto;
    }

    public function retirar($monto) {
        if ($this->saldo >= $monto) {
            $this->saldo -= $monto;
        } else {
            throw new Exception('Saldo insuficiente');
        }
    }
}