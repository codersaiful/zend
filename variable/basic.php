<?php 
$aaa = "AAA aa";
// $bbb = &$aaa;

$bbb = "BBB BB bb";
echo $bbb;

function test_ref_v( &$ddd ){

    return $ddd;
}

var_dump(test_ref_v($aaa));
var_dump($aaa);
var_dump($bbb);

$test_var = "TEST var";
function fun_with_ref_var(&$ref_var){

    return $ref_var;
}

echo fun_with_ref_var("TEST var");//Invalid
echo fun_with_ref_var($test_var);