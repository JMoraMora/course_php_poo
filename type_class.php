<?php

class ClassName 
{
    public ClassOther $prop;

    public function __construct(ClassOther $prop)
    {
        $this->prop = $prop;
    }
}

class ClassOther 
{
    public function method()
    {
        return 'Hello World!';
    }
}

$obj = new ClassName(new ClassOther());

echo $obj->prop->method() . PHP_EOL;
