<?php 

/**
 * Prepare Statement:
 * 
 * @link https://www.php.net/manual/en/pdo.prepare.php
 * 
 */

 $username = 'root';
 $host = 'localhost';

 $password = '';
 $db_name = 'test_zend_class';

 $dns = "mysql:host=$host;dbname=$db_name";


try{
    $conn = new PDO($dns, $username, $password);

}catch(PDOException $e){
    die();
}



//Fetching
$sql = 'SELECT * FROM students
WHERE ID = :id';
$obj = $conn->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$obj->execute(['id'=> 2]);
var_dump($obj->fetchAll(PDO::FETCH_ASSOC));
//Kaj koreni eta, test korte hobe
$obj->bindParam('id', 1, PDO::PARAM_INT);
var_dump($obj->fetchAll(PDO::FETCH_ASSOC));