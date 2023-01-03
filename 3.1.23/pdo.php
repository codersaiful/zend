<?php
/**
 * 
 * @link https://www.php.net/manual/en/book.pdo.php
 * @link https://www.mysqltutorial.org/
 * @link https://www.php.net/manual/en/class.pdo.php
 */

 $username = 'root';
 $host = 'localhost';
 $dns = 'mysql:host=localhost';
 $password = '';
 $db_name = 'test_zend_class';
 $db_connect = new PDO($dns, $username, $password);
var_dump($db_connect);

try{
    $db_connect = new PDO($dns, $username, $password);
    var_dump($db_connect);

}catch(PDOException $e){
    echo 'Error';
    var_dump( $e );
    die();
}

 class Db_Connect{

 }
