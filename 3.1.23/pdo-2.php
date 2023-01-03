<?php 
 $username = 'root';
 $host = 'localhost';

 $password = '';
 $db_name = 'test_zend_class';

 $dns = "mysql:host=$host;dbname=$db_name";


try{
    $conn = new PDO($dns, $username, $password);
    // var_dump($conn);
    echo 'Success';
    var_dump($conn);



}catch(PDOException $e){
    echo 'Error';
    var_dump( $e );
    die();
}
