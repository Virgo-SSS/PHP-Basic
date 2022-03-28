<?php 

class student
{
    public function __invoke(...$arguments)
    {
        $join = join(",", $arguments);
        echo "hello virgo with $join";
    }
}



?>