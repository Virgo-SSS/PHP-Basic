<?php 

// namespace OOP\data;


// use OOP\data\manager as manager;



//ini artinya seluruh function yg ada di manager, bisa dimiliki oleh vice manager
// karena manage parent dan vicemanager itu child
class vicemanager extends manager
{
    public function sayHallo($name):void
    {   
        // $this->name mengarah kepada var $name, dan $name mengarah kepada param $name
        echo "Hallo $this->name, Selamat malam $name hai hai";
    }

}


?>