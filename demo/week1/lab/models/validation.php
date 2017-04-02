<?php

function isZipValid($ZIP){
    $zipRegex = '/^[0-9]{5}$/';
    
    if (preg_match($zipRegex, $ZIP)){
        return true;
    }
    
    return false;
}
function isDateValid($date){
    return (bool)  strtotime($date);
}
function isEmailValid($email){
    $emailRegex = '^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$';
    
    if (preg_match($emailRegex, $email)){
        return true;
    }
    
    return false;
}