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
echo $string{2};