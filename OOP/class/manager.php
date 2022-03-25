<?php 

class manager 
{
    var $name;

    // "void" untuk menghilangkan return value jadi kita bisa tidak mengembalikan value
    // dengan kasih "void" maka function nya tidak akan mengembalikan nilai
    public function sayHallo($name):void
    {   
        // $this->name mengarah kepada var $name, dan $name mengarah kepada param $name
        echo "Hallo $this->name, Selamat pagi $name";
    }
}


?>