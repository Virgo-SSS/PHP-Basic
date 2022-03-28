<?php 

require_once "OOP/data/loginrequest.php";
require_once "OOP/data/validation.php";
require_once "OOP/data/validationexception.php";

$login = new loginrequest();
$login->name = "virgo";
$login->password = "123";

// validatelogin($login);
try {
    validatelogin($login);
} catch (Validationexception $e) {
    echo $e->getMessage();
}

echo "valid";

?>
