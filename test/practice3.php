<?php 

$saiful = function($val){

    return $val;
};

var_dump($saiful("Param Stringdddddddddddddddddddddddddddddddddddddddddddddd"));

function my_func($numb){
    $output = function($in_numb) use ($numb){
        return $numb . " " . $in_numb;
    };
    return $output;
}
$ssss = my_func("Saiful");
var_dump($ssss);
echo $ssss("Islam");