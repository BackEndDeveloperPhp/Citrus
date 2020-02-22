<?php

class Model {

    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "citrus";
    private $conn;
    
    protected function connect(){

        try {
            $this->conn = new PDO("mysql:host=$this->server;dbname=$this->db", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); 
        } catch (PDOException $e) {
                echo "connection filed" . $e->getMessage();

        } 

        return $this->conn;
    }  
    
    
 

}

?>