<?php
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