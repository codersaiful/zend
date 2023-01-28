<?php 
// var_dump('hello ' . 1 + 2 . '34');
// echo 'hello ' . 1 + 2 . '34';
//should hello334
$a = 6;
$a += 5;
var_dump($a);
$a %= 3;
var_dump($a);
$a = "Hello";
$b = "World";
echo("$a"+"$b");
// echo($a$b);//Sysntex Error
// print 12,33,44; //Only can one in print()

$arr = ['1'=>100,2,3];
var_dump($arr['1']);

// echo "this is a "echo statement""; //Sysntex Error
echo "This",true,"PHP"."MCQs<br>";
print false;
// var_dump("is"@"a");
$a = 1;
$b = 3;
var_dump("$a + $b");
$a = 1;
$b = 2;
$c = 3;
var_dump(1%45,($a % ($b) + $c),($a * (($b) - $c)));
$n = 10;
function myNum($n){
    $n++;
    echo $n . ",";
}
echo $n . ",";
GLOBAL $n;
myNum($n);
echo $n;

$a = 2;
function myTest($a){
    $a += 10;
    var_dump($a);
    global $a;
    var_dump($a);
}
myTest($a);