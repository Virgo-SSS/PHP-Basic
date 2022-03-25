<?php 

require_once "OOP/class/person.php";

$person = new Person();

// var_dump($person)

$person->name = "Budi ";
$person->address = "Jl. Kebon Jeruk ";
$person->country = "Jakarta";

// var_dump($person);
echo $person->name;
echo $person->address;
echo $person->country . PHP_EOL;

$person2 = new Person();

// var_dump($person)

$person2->name = "Joni ";
$person2->address = "Jl. Ladang Jeruk ~";
$person2->country = "bandung" ;

// var_dump($person);
echo "nama: $person2->name";
echo "Address : $person2->address";
echo "Contry :$person2->country";


?>