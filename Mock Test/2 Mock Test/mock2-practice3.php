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
$a = 15 << 2;
var_dump($a);
$a = "1";
$b = "01";
var_dump($a == $b,$a === $b, gettype($a),gettype($b),$a < $b);
hr();
// $a = 'hello' + '123';
// var_dump($a); //Ans: 123;

function getName($lastName){
    if($lastName){
        return 'Blogs';
    }else{
        return 'jeremiah';
    }
}
$func = 'getName';
var_dump(${'func'});
echo $func(true);
hr();
$myVar = 'foo';
$$myVar = 'bar';
echo ${'myVar'} . $foo;
hr();
$str = "Hello";
if ($str == "Hello")
 echo "a";
else if ($str == "Goodbye")
 echo "b";
elseif ($str == "Hello")
 echo "c";
else
 echo "d";
hr();
$x = 5;
switch ($x) {
 case 5:
 echo "a";
 break;
 case 10:
 echo "b";
 break;
 case 15:
 echo "c";
 break;
 case 20:
 echo "d";
 break;
 default:
 echo "e";
}
hr();
$number = 15;
if ($number > 15);
 for ($i = 1; $i < 5; $i++)
 echo $i;
echo $number;
hr();
var_dump(ord("a"));
if (array(12)) {
    echo "e";
   }
hr();
$a = 4 << 2;
echo $a;
hr();
define('Tree', 'oak');
// echo 'This tree is: ' . tree;
var_dump(0x2f + 17);
var_dump(23 || 23 + 55 && 3);
hr();
$a = 0xf2 + 0x09;
var_dump($a);
$b = $a >> 3;
echo $b;
