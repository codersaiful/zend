<?php
function hr(): void
{
    echo '<hr>';
}
var_dump(2 <=> 3);
hr();
$a = "PHP";
$a++;

var_dump($a);

$a = true;
var_dump($a);
$b = false;
$c = true;
// var_dump($a);
$d = false;
var_dump($a);
// var_dump($a,boolval($a),boolval(!$b),boolval(!!$c),boolval(!$d));
if ($a && !$b) {
    var_dump('first cond');
    if (!!$c && !$d) {
        var_dump('2nd cond');
        if ($d && ($a || $c)) {
            if (!$d && $b) {
                $number = 1;
            } else {
                $number = 2;
            }
        } else {
            $number = 3;
        }
    } else {
        $number = 4;
    }
} else {
    $number = 5;
}
hr();
function testFunc($aa,$bb,$cc):string
{
    var_dump(func_get_args());
    var_dump(func_get_arg(2));
    return 'saiful';
}
testFunc(23,332,422);



unset($GLOBALS['_SERVER']);
var_dump($number);
${0xFA} = 2323;
${01211} = 2323;
${100} = 2323;
@$foo = 33333;
var_dump($GLOBALS);
