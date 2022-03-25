<?php 

require_once "OOP/data/person.php";
require_once "OOP/data/manager.php";
require_once "OOP/data/vicemanager.php";


$new = new manager();
$new->name = "Budi ";
$new->sayHallo("virgo");


// Nah sekarang lihat padahl di class vice manager tidak tertulis function apa pun di dalam nya
//  tetapi karena class nya  kita extends ke manager jadi,
// class vicemanager bisa menggunakan semua function yg ada di class manager
// tanpa perlu menulis ulang lagi function nya di dalam class vicemanager
$per = new vicemanager();
$per->name = "Joni ";
$per->sayHallo("virgo");
?>