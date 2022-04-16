<?php 


require_once __DIR__ . '/vendor/autoload.php';

use Virgo\data\people;


$people = new people('Virgo');

echo $people->sayHello('buid') . PHP_EOL;
