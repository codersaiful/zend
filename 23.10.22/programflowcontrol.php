<?php 
$animals = ['cow','Got','Cock','Duck','Kangaroo','Bafellow'];

try{
    foreach( $animals as $animal ){
        if($animal == 'Kangaroo'){
            throw new Exception( "$animal is not a Bangladesh Animal" );
        }
    }
}catch(Exception $err){
    echo $err->getMessage();
}