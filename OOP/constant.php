<?php 

require_once "OOP/class/person.php";
// di php dasar biasanya  untuk membuat data yg tak bisa dibuah menggunakan define()
// semenjak php 7.4 bisa menggunakan const

const APP_VERSION = "1.0.0";



echo "app version saat ini adalah : " . APP_VERSION . PHP_EOL;

echo "hallo nama saya budi " .PHP_EOL ;

// constant juga bisa di bikin di class
// silahkan lihat di class


// kemudian cara manggila const dari class
echo "Made BY " . person::AUTHOR . PHP_EOL;

$new = new person();
$new->sayHai();

?>