<?php 

class product 
{
    protected string $name;
    protected int $price;

    public function __construct($name, $price)
    {
        
        $this->name = $name;
        $this->price = $price;
    }


    // BIKIN function baru untuk mengakses private string $name
    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }


}


class productDummy extends product
{
    public function info()
    {
        echo "name = $this->name";
    }

    
}





?>