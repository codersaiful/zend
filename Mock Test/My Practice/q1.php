<?php
/**
 * Personal practice:
 * 
 * @link https://www.javatpoint.com/php-mcq
 */


var_dump(uniqid(),strcmp("aello world!","Hello world!"));
var_dump(uniqid(),strncmp("aello Worlff!","Hello world!", 2));
$a = true;
var_dump(isset($a),isset($aff));
echo '<hr>';
//Using of sprintf()
$helo = sprintf('this is %2$s and First number is: %1$s','2ND', '1ST');
var_dump($helo);
printf('this is %2$s and First number is: %1$s','2ND', '1ST');
echo '<hr>openfile<br>';

$file = fopen('test.txt','r');
var_dump($file);
//Output lines until EOF is reached
while(! feof($file)) {
    $line = fgets($file);
    echo $line. "<br>";
}
fclose($file);
var_dump(glob("*.txt"),file('test.txt',FILE_IGNORE_NEW_LINES));//file function work also for website url.
echo '<hr>ASCII<br>';
var_dump(chr(66));
for($i=0;$i<= 200;$i++){
    echo chr($i) . ": $i<br>";
}
