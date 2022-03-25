<?php 

require 'functions.php';

$id = $_GET["id"];

if( hapus($id) > 0 ) {
   
    echo "data berhasil di hapus";
} else {
    echo "data gagal di tambahkan";
}
 
return header("Location: index.php");

?>