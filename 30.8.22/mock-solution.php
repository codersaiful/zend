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