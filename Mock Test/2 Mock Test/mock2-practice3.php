<?php
function hr($txt = ''){
    echo "<hr>$txt";
}
$a = 8;
$b = 7;
var_dump("$a,$b",$a & $b, $a | $b, $a ^ $b);
hr();
$a = 2;
$b = 2;
var_dump("$a,$b",$a & $b, $a | $b, $a ^ $b);
hr();
$a = 11;
$b = 2;
var_dump("$a,$b",$a & $b, $a | $b, $a ^ $b);
hr();
$a = 15 << 2;
$b = 10 >> 1;
$c = 0xF0 >> 4;
echo sprintf('%d - %d - 0x%X', $a, $b, $c);
hr();
$a = 0xF0;
$b = 0x0F;
var_dump($a & $b);