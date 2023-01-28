<?php
$aaaa = 44;
$bbbbb = 444;
function sample(){
    $var1 = 20;
    $testsss = 878;
    var_dump($GLOBALS);
}
$testt = 3434;
// sample();
// var_dump($GLOBALS);
//$GLOBALS এ শুধু মাত্র বাইরের মানে গ্লোবাল স্কোপের ভেরিয়েবল গুলো থাকবে। 
define('SAIFUL','ee');
$var1 = 33;
// var_dump($_SERVER);
var_dump(SAIFUL);
function tesst($a){
    var_dump($a);

}
tesst(SAIFUL);
var_dump(constant('SAIFUL'));
// class myObject { }
// define('myObject::CONSTANT', 'test');
// echo constant('myObject::CONSTANT');
if(TRUE) 
    echo "This condition is TRUE"; 
if(FALSE) 
    echo "This condition is not TRUE"; 
echo '<hr>';
$tax = "17.5";
var_dump($tax, gettype($tax));
echo '<hr>';
$aaa = '122.333';
var_dump(gettype($aaa), $aaa);
settype($aaa,'int');
var_dump(gettype($aaa), $aaa);

var_dump(ord($tax));