<?php

class ClassName 
{
    public $prop1 = 'val';
    public $prop2 = 'val';

    public function method()
    {
        return 'Hello World!';
    }
}

$obj = new ClassName();

echo $obj->prop1;
echo $obj->prop2;
echo $obj->method();