<?php 

require_once "OOP/data/manager.php";
require_once "OOP/data/vicemanager.php";


$new = new manager();
$new->name = "Budi ";
$new->sayHallo("virgo");



$per = new vicemanager();
$per->name = "Joni ";
$per->sayHallo("joko");
?>