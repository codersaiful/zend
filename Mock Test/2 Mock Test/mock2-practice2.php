<?php
function hr($txt = ''){
    echo "<hr>$txt";
}
$a = 3;
$b = 2;
var_dump($a & $b);
var_dump($a | $b);
hr();
$a = 7;
$b = 3;
var_dump($a & $b);
var_dump($a | $b);
hr();
$a = 0xF0; //240
$b = 0x0F; // 15
var_dump($a & $b);
var_dump($a | $b);
hr();
var_dump(240^255);//ekta truu hole tru, dutoi tru hole false
$a = 0xF0;
$b = 0x0F;
$val1 = $a & $b; // bitwise AND
$val2 = $a | $b; // bitwise OR
$val3 = $a ^ ($b | $a); // bitwise XOR
echo sprintf('0x%02X - 0x%02X - 0x%02X', $val1, $val2, $val3);
var_dump($val1, $val2, $val3);
hr();
$a = range(3,9);
var_dump($a);
hr();
var_dump(
    't' == t, // Notice //true
    1 === "1time", //false
    "top" == 0, //true
    "top" === 0, //false
    1 == "1time" //true
   );