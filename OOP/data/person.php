<?php 

class person //INI CLASS
{
    var $name;
    var $address;
    var $country;

    // public function __construct($name) // construct  bisa menggunakan param atau tidak
    public function __construct() // construct  bisa menggunakan param atau tidak
    {
        // $this->name = $name// $this->name mengarah kepada var $name, dan $name mengarah kepada param $name

    }
    // "?" Digunakan untuk mengatur bahwa value dari param nya boleh null
    function sayHello(?string $name)
    {
       
        if(is_null($name)){
            echo "Hi $this->name, selamat pagi";
        } else {
            echo "Hi $name";
        }

    }


    // const di class
    const AUTHOR = "Virgo Stevanus";


    function sayHai()
    {
        // Jdi disini ingin membuat function yg di dalam nya memerlukan const dari class itu sendiri,
        // untuk membuatnya bisa menggunakan person::author
        // tetapi karena di bikin di class itu sendiri, untuk memeprmudah maka bisa 
        // menggunakan "self" keyword, jadi gk perlu ketik person, kecuali di bikin di luar class
        echo "Di buat oleh : " . self::AUTHOR . PHP_EOL;
    }

}
 ?>