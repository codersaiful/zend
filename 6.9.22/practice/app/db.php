<?php
namespace Saiful\App;

use mysqli;

class DB{
    public $conn;
    public static $_instance;

    public static function getInstance(){
        if( self::$_instance == null ){
            self::$_instance = new self;
        }
        return self::$_instance;
    }


    public function __construct()
    {
        $this->conn = new mysqli('localhost','root','','test');
    }

    public function fetchAll( $queredObj ){
        if( ! $queredObj ) return;
        return $queredObj->fetch_all(MYSQLI_ASSOC);
    }
    public function query( $sql ){
        return $this->conn->query( $sql );
    }
}