<?php 
$email = 'codersaiful@gmail.com';
function blue_default($exception){
    echo "<hr>Blue<hr>" . $exception->getMessage();
}
function red_default($exception){
    echo "<hr>Red<hr>" . $exception->getMessage();
}

set_exception_handler('blue_default');

$animals = ['cow','Got','Cock','Duck','Kangaroo','Bafellow'];

foreach( $animals as $animal ){
    if($animal == 'Kangaroo'){
        throw new Exception( "$animal is not a Bangladesh Animal" );
    }
}

set_exception_handler('red_default');
$animals = ['cow','Got','Cock','Duck','Kangaroo','Bafellow'];

foreach( $animals as $animal ){
    if($animal == 'Kangaroo'){
        throw new Exception( "$animal is  Animal" );
    }
}
//restore korle abar prothom ta chalu hobe.
restore_exception_handler();