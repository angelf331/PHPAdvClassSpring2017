<?php

/**
 * Description of DBSpring
 *
 * @author GFORTI
 */
class DBAddress extends \DB {
    //put your code here
    
    function __construct() {
        parent::__construct('mysql:host=localhost;port=3306;dbname=PHPAdvClassSpring2017', 'root', '');
        
    }
    
    function getAllAddresses() {
        $db = $this->getDb();
        $stmt = $db->prepare("SELECT * FROM address");

        $results = array();
        if ($stmt->execute() && $stmt->rowCount() > 0) {
           $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        
        return $results;
    }

}
