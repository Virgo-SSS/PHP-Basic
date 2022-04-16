<?php 

namespace Virgo\data;

class people
{
    public function __construct(private string $name)
    {
        
    }

    public function sayHello(string $name)
    {
        echo "hello $name, My name is $this->name";
    }
}


?>