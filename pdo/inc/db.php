<?php

class DB{
    private $host = 'localhost';
    private $dbname = 'test_zend_class';
    private $user = 'root';
    private $pass = '';
    private $dns;
    public $conn;
    public $error;
    public function __construct()
    {
        $this->dns = "mysql:host=$this->host;dbname=$this->dbname";
        try{
            $this->conn = new PDO($this->dns, $this->user, $this->pass);
            
        }catch(PDOException $e){
            $this->error = $e;
        }
    }

    public function connect()
    {
        if($this->conn){
            return $this->conn;
        }
        echo $this->error->getMessage();
        var_dump($this->error);
        die();
    }
}

$db = new DB();
$conn = $db->connect();

