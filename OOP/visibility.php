<?php 

require_once "OOP/data/product.php";

$vis = new Product('budi', 23333);

echo $vis->getName();
echo $vis->getPrice();

$dummy = new ProductDummy('joko', 5555);
$dummy->info();
?>