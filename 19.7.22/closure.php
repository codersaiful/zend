<?php 
$client = "Alvaro";

$output = function() use ($client){
    echo "Client name is: $client";
};
var_dump($output->static);
$output();
echo "<hr>";

function myClosure($number){
    return function($x) use($number){
        return "C: $x and number is $number";
    };
}

// echo var_dump(myClosure(2323));//Error
$saiful = myClosure(1222);
echo $saiful(33);