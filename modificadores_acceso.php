<?php 

class Padre 
{
    public string $name = 'name';
    protected string $inheritance = 'inheritance';
    private string $secret = 'secret';
}

class Hijo extends Padre
{
    public string $name;
    public string $inheritance;
    
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->inheritance = parent::$inheritance;

    }
}

$hijo = new Hijo('pepe');
echo $hijo->inheritance . PHP_EOL;
