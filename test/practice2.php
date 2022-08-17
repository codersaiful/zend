<?php 
// $a = [];
for($i=0;$i<1.02;$i+=0.17){
    var_dump($i);
    $a[$i] = $i;
}
var_dump("Output:",count($a),$a);
echo "<hr>";
$string = "This is a String";
// echo $string[2];
//echo $string{2}; //From 7.4 version, curly bracket is no longer available in php

echo '<hr>';

function increment(&$val){
    $val += 1;
}
$a = 2;
increment($a);
increment($a);
increment($a);
increment($a);
var_dump($a);
increment($a);
increment($a);
var_dump($a);
echo '<hr>';
function test_inc(){
    static $num = 0;
    return $num+=1;
}

var_dump(test_inc());
var_dump(test_inc());
var_dump(test_inc());
var_dump(test_inc());
var_dump(test_inc());
var_dump(test_inc());