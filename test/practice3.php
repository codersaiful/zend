<?php 

$saiful = function($val){

    return $val;
};

var_dump($saiful("Param Stringdddddddddddddddddddddddddddddddddddddddddddddd"));

/**
 * Q: 21
 *
 * @param [type] $numb
 * @return void
 */
function my_func($numb){
    $output = function($in_numb) use ($numb){
        return $numb . " " . $in_numb;
    };
    return $output;
}
$ssss = my_func("Saiful");
var_dump($ssss);
echo $ssss("Islam");

//-------------
echo '<hr>';
function _string_repeater( int $count){
    return function(String $str ) use ($count){
        return str_repeat( $str . " ", $count );
    };
}

$repeater = _string_repeater(3);
var_dump( $repeater("Saiful") );
//Namta Showing
echo 'Namta<hr>';
function calculate_number( int $numtaGhar){
    return function( int $position) use( $numtaGhar ) {
        return $position * $numtaGhar;
    };
}

function execute_numta( int $numtaGhar, int $limit = 10 ){
    echo '------------<br>';
    for( $i = 1; $i <= $limit; $i++ ){
        $cal = calculate_number($numtaGhar);
        $position_val = $cal($i);
        echo "$numtaGhar x $i = $position_val <br>";
    }
    echo '------------';
}
execute_numta(141);