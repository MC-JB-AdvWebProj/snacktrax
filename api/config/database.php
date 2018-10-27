<?php
class Database{
 
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "snack_trax";
    private $username = "root";
    private $password = "@L3sley2018!";
    
    public $conn;
 
    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=snack_trax" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
            echo "Connected successfully";
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
?>