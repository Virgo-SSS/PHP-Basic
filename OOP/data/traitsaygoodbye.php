<?php 

trait SayGoodbye
{
    public function sayGoodbye($name)
    {
        if(!empty($name))
        {
            echo "Goodbye, $name!";
        } else {
            echo "Good bye Tidak di kenal";
        }

    }
}

class psp 
{
    use SayGoodbye;
}

?>