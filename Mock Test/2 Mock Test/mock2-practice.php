<?php
function hr($txt = ''){
    echo "<hr>$txt";
}
$a = 0;
if($a = 10){
    var_dump($a . ": a");
}
if ($a == 0) {
    echo "b";
}
if ($a == "0") {
    echo "c";
}
   
// $output = `ls`;
// var_dump($output);
$str = 'foo';
$str .= 'bar';
$num = 0;
$num += 25;
$num -= 15;
echo $str . ' - ' . $num;

$a = ($b=13) - 5;
var_dump($a,$b);
hr();
$x = 0x2A0;
var_dump($x);
hr();
$a = 0xF0;
//240
$b = 0x0F;
//15
$val1 = $a & $b; // bitwise AND
//0 এটাতে জিরো কিভাবে হলো?
$val2 = $a | $b; // bitwise OR
//255 এইটা কিভাবে হলো
$val3 = $a ^ ($b | $a); // bitwise XOR
// 15 কিভাবে হলো? 
echo sprintf('0x%02X - 0x%02X - 0x%02X', $val1, $val2, $val3);
//0x00 - 0xFF - 0x0F 

hr();
$a = 15;
$b = $a << 3; //Explain: b = 15 * 2^2 //Explanation need
var_dump($b, 0b1100);
hr();
var_dump( 5&7);
hr();
var_dump(0xF0,0x0f,240&15);
hr();
var_dump(5&4,5|4);

