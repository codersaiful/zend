<?php 
function increment (&$val) {
    return $val + 1; 
}
$a = 1;
echo increment ($a);
echo $a;

increment($a);
echo "<hr>";

/**
 * https://prnt.sc/OIjMKDXgx9Dh
 *
 * @return void
 */
function Numta(){
    return function(){};
}

$aaa = function($a){return $a;};
var_dump($aaa);

/**
 * 30 numberr test korote hobe.
 * 32 check korote hobe.
 * 36 
 * 40 experiment korte hobe
 */