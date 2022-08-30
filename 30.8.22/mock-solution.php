<?= (int) ((0.1 + 0.8) * 10); ?>
<?php
echo 5 !== 5;
/**
 * x = 1 y = 2
x = 1 y = 3
G:\wamp64\www\zend\30.8.22\mock-solution.php:4:int 2
x = 2 y = 1
x = 2 y = 3
 */
for($x = 1; $x <= 2; $x++) {
    var_dump($x);
    for($y = 1; $y <= 3; $y++) {
    if ($x == $y) continue;
    print("x = $x y = $y<br>");
    }
}
var_dump((bool) 5.8);
function magic($p, $q) {
    return ($q == 0) ? $p : magic($q, $p % $q);
   }

   var_dump(magic(3,4));
   $a = `ls -l`;
var_dump($a);
switch(1) {
    case 1: print("Book Details");
    case 2: print("Book Author");
    default: print("Missing Book");
   }

var_dump('--');
$x = 0;
$i;
for($i = 0; $i < 5; $i++) {
    var_dump($i);
 $x += $i;
}
print($x);
/**
 * constand decline korar arekta niyom.
 */
const a = "hello";
const A = "Hello";
var_dump('--');
$a = 20;
function myfunction($b) {
 $a = 30;
 global $a, $c;
 return $c = ($b + $a);
}
print myfunction(40) + $c;
echo '<br>';
$a = 20 % -8;
echo $a;