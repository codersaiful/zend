<?php
$username = 'root';
$host = 'localhost';

$password = '';
$db_name = 'test_zend_class';

$dns = "mysql:host=$host;dbname=$db_name";


try{
   $dbh = new PDO($dns, $username, $password);

}catch(PDOException $e){
    var_dump($e);
   die();
}

var_dump($dbh);

try {  
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $rand = rand(5, 99999);
    $dbh->beginTransaction();
    $dbh->exec("insert into students (name, address, mobile) values ('Joe-{$rand}', 'Nator', '')");
    $dbh->exec("insert into customers (name, address, mobile) values ('C Joe-{$rand}', 'Bogura', '')");
    $dbh->commit();
    
  } catch (Exception $e) {
    $dbh->rollBack();
    echo "Failed: " . $e->getMessage();
  }