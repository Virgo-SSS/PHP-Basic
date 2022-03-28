<?php 

function validatelogin(loginrequest $request)
{
    if(!isset($request->name)) {
        throw new Validationexception ('username is null');
    } else if (!isset ($request->password)) {
        throw new Validationexception ('password is null');
    } else if (trim($request->name) == "") {
        throw new Exception ('username is null');
    } else if(trim($request->password) == "") {
        throw new Exception ('password is null');
    }
}

?>