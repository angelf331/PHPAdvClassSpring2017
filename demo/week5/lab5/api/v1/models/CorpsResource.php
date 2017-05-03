<?php
/**
 * Lets implement the REST CRUD model for our API
 */
class CorpsResource extends DBSpring implements IRestModel {
    
    public function getAll() {
        $stmt = $this->getDb()->prepare("SELECT * FROM corps");
        $results = array();      
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return $results;
    }
    
    public function get($id) {
       
        $stmt = $this->getDb()->prepare("SELECT * FROM corps where id = :id");
        $binds = array(":id" => $id);

        $results = array(); 
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        
        return $results;
                
    }
    
    public function post($serverData) {
        /* note you should validate before adding to the data base */
        $stmt = $this->getDb()->prepare("INSERT INTO corps SET corp = :corp, email = :email, incorp_dt = :incorp_dt, location = :location, owner = :owner, phone = :phone");
        $binds = array(
            ":corp" => $serverData['corp'],
            ":email" => $serverData['email'],
            ":incorp_dt" => $serverData['incorp_dt'],
            ":location" => $serverData['location'],
            ":owner" => $serverData['owner'],
            ":phone" => $serverData['phone']
        );

        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            return true;
        } 
        return false;
    }
    
    public function put($serverData, $id){
        
        $stmt = $this->getDb()->prepare("UPDATE corps SET corp = :corp, email = :email, incorp_dt = :incorp_dt, location = :location, owner = :owner, phone = :phone WHERE id = :id");
        $binds = array(
            ":id" => $id,
            ":corp" => $serverData['corp'],
            ":email" => $serverData['email'],
            ":incorp_dt" => $serverData['incorp_dt'],
            ":location" => $serverData['location'],
            ":owner" => $serverData['owner'],
            ":phone" => $serverData['phone']
        );
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            return true;
        }
        return false;
    }
    public function delete($id){
        $results = false;
        
        $stmt = $this->getDb()->prepare("DELETE FROM corps where id = :id");
        $binds = array(":id" => $id);
        
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = true;
        }
        return $results;
    }
}