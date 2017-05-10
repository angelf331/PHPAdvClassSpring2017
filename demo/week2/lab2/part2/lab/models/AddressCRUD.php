<?php
class AddressCRUD extends DB{
    function __construct() {
        parent::__construct('mysql:host=localhost;port=3306;dbname=PHPAdvClassSpring2017', 'root', '');
        
    }
//gets data from database
function readAllAddress(){
    $db = $this->getDB();
    $stmt = $db->prepare("SELECT * FROM address");
    
    $results = array();
    if ($stmt->execute() && $stmt->rowCount() > 0) {
       $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    return $results;
    
}

/**
 * A method to add address data to the database.
 * 
 * @param type $fullname
 * @param type $email
 * @param type $addressline1
 * @param type $city
 * @param type $state
 * @param type $zip
 * @param type $birthday
 * 
 * @return boolean
 */
//creates data to database
function createAddress($fullname, $email, $addressline1, $city, $state, $zip, $birthday){
    $db = $this->getDB();
    $stmt = $db->prepare("INSERT INTO address SET fullname = :fullname, email = :email, addressline1 = :addressline1, city = :city, state = :state, zip = :zip, birthday = :birthday");
    $binds = array(
        ":fullname" => $fullname,
        ":email" => $email,
        ":addressline1" => $addressline1,
        ":city" => $city,
        ":state" => $state,
        ":zip" => $zip,
        ":birthday" => $birthday,
    );
    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        return true;
    }
    
    return false;
}
}
