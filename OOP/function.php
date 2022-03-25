<?php 

require_once "OOP/class/person.php";

$person = new Person();
$person->name = "Budi ";
// var_dump($person);
// Cara manggil function, untuk fucntion nya udh di letakan di class
// $person->sayHello(null);
$person->sayHello('virgo')


?>