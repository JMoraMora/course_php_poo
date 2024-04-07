<?php

readonly class ClassName 
{
    public string $prop1;
    public string $prop2;

    public function __construct(string $prop1, string $prop2)
    {
        $this->prop1 = $prop1;
        $this->prop2 = $prop2;
    }
}

$obj = new ClassName('val1', 'val2');

echo $obj->prop1 . PHP_EOL;
echo $obj->prop2 . PHP_EOL;

echo $obj->prop1 = 'new val'; // Fatal error: Uncaught Error: Cannot write to readonly property ClassName::$prop1