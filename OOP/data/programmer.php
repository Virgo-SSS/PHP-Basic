<?php 


class programmer 
{
    public string $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

}

class backendprogrammer extends programmer
{


}


class frontendprogrammer extends programmer
{


}




class company
{
    public programmer $programmer;
}


function sayHelloprogrammer(programmer $programmer)
{
    echo "hello programmer $programmer->name";
}

function sayHellopro(programmer $programmer)
{
   if ($programmer instanceof backendprogrammer) {
       echo "hello Backend programmer $programmer->name";
   } elseif ($programmer instanceof frontendprogrammer){
        echo "hello fronten programmer $programmer->name";
   } else {
       echo "hello programmer $programmer->name";
   }
}


?>