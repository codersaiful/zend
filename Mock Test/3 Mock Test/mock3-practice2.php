<?php 
function hr(): void
{
    echo '<hr>';
}

function &get_value() {
    static $value = 0;
    return $value;
  }
  hr();
  function &find_variable(&$one, &$two, &$three) {
    if ($one > 95 && $one < 100) return $one;
    if ($two > 10 && $two < 20) return $two;
    if ($three > 1 && $three < 100) return $three;
   }
   $one = 90;
   $two = 60;
   $three = 89;
   $var = &find_variable($one, $two, $three);
   $var++;
   echo "$one - $two - $three";
   hr();
   function test(?int $n)
   {
        var_dump($n);
   }
   var_dump(1);

hr();
$a = 1;
$b = 2.5;
$c = 0xFF;
$d = $b + $c;
$e = $d * $b;
$f = ($d + $e) % $a;
var_dump($a,$b,$c,$d,$e,$f);