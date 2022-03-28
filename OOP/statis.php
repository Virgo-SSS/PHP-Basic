<?php 

require_once "OOP/data/static.php";

$st = new statics();
echo statics::$name = "virgo";


$num = statics::sum(10,10,10,10,10);
echo $num;
?>