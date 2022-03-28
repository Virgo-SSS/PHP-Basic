<?php 

require_once "OOP/data/programmer.php";

$comp = new company();
$comp->name = new programmer ("Budi");
$comp->name = new backendprogrammer("Joni");
$comp->naem = new frontendprogrammer("joko");
var_dump($comp);

sayHelloprogrammer(new programmer('budi'));
sayHelloprogrammer(new backendprogrammer('joni'));
sayHelloprogrammer(new frontendprogrammer('joko'));

sayHellopro(new programmer('budi'));
sayHellopro(new backendprogrammer('joni'));
sayHellopro(new frontendprogrammer('joko'));
?>