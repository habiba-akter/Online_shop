<?php

class ConnectionBridge {
    private $host = "localhost";
    private $db = "online_shop_1";
    private $user = "root";
    private $password = "";
    private $con;
    
    public function __construct() {
 
        $this->con = new PDO("mysql:host=$this->host; dbname=$this->db", $this->user, $this->password);
    }
    
    public function getAllData($query){
        $sql = $this->con->query($query);
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function insertData($query){
        $sql = $this->con->exec($query);
        return $sql?1:0;
    }
    
     public function deleteData($query){
        $sql = $this->con->exec($query);
        return $sql?1:0;
    }
    
    public function updateData($query){
        $sql = $this->con->exec($query);
        return $sql?1:0;
    }
}
