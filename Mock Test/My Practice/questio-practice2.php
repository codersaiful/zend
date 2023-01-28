<?php
/**
 * Personal practice:
 * 
 * @link https://www.javatpoint.com/php-mcq
 */
function hr($str = '---'){
    echo "<hr>$str<br>";
}
$num = 'Personal practice Test wold';
var_dump(gettype($num),$num,boolval($num));
// echo(gzcompress($num));

$heredoc = <<<HEREDOC
this is a heredoc, where support var. Test var: $num
HEREDOC;

$newdoc = <<<'newdoc'
this is a heredoc, where support var. Test var: $num

newdoc;
var_dump($heredoc,$newdoc);
echo '<hr>uppercase<br>';
var_dump(strtoupper($num),fileatime('test.txt'));
echo '<hr>43<br>';
echo "welcome"."to";
hr();
$a = 0;
while($a++){
    echo "hello";
    echo $a;
}
echo $a;
hr();

$x = 15;
$y = 20;
/**
 * $x == ++x
 * $x > $x++
 * 
 */
var_dump($x > $x++);
hr();
var_dump(lcfirst($num), ucwords($num));
$a = 1;
switch($a){
    case 1: echo "hello";
    case 2: 
        echo "World";
    default: 
        echo "codersaiful.com";
}

hr();
$x = 1;
switch($x){
    case 1: print("Case 1");
    case 2: print("Case 2");
    case 3: print("Case 3");
    case 4: print("Case 4");
    case 5: print("Case 5");
    default: print('Default');
}
var_dump(strtr('Walcoma to thu codeustrology.com','au','ea'));
$a = 5;
while($a){
    echo "hello";
    $a--;
}
var_dump(strrev($num));
hr("array_product - sokol valur gunfol");

$arr = [2,3,4];
var_dump(time());
var_dump(array_product($arr));