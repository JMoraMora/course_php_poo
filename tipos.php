<?php 

class ClassName 
{
    public int $prop1 = 12;
    public string $prop2 = 'val';
    public bool $prop3 = true;
    public array $prop4 = [1, 2, 3];
}

$obj = new ClassName();

echo $obj->prop1 . \PHP_EOL;
echo $obj->prop2 . \PHP_EOL;
echo $obj->prop3 . \PHP_EOL;
print_r($obj->prop4) . \PHP_EOL;