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
execute_numta(13);

//Q: 22 Ans: 214
echo '<hr>';
echo 'H' . print 2 . print 4 . print 'A'; //A4121H1
echo '<br>';
echo 'H' . (print 2) . print 4 . ( print 'S' ); //2S41H11

// echo 3 . (boolval(2)) . '<br>';
echo '<hr>';
var_dump(print 2);
echo '1' . (print '2') + 3;

//Question: 24 
// ক্লাসের ভিডিও দেখতে হবে।

/**
 * QUESTION: 26
 * tested at test/mark.php file 
 * জিনিস টা আমি চেক করেছি। একের অধিক সাবমিট বাটন থাকলেও
 * যেই সাবমিট বাটনে ক্লিক করা হবে সেটাই সাবমিট হবে।
 * অন্য সাবমিট বাটন পোস্ট বা গেটে যাবে না। 
 * Screenshot: https://prnt.sc/pi401Jxoa5GC
 */
echo '<hr>';
/**
 * Question 28:
 */

$test1 = <<<'TEXT'
$text
TEXT;
$test2 = <<<TEXT
$test1
TEXT;
echo $test2;