<?php

$numbers = range("A","z");
$numbers = range(2,45);
var_dump($numbers);

$luckyDip = [
    function(){
        echo "Fun1";
    },
    array(
        'name' => 'Saiful Islam',
        'age'   => 35,
    ),
    function(){
        echo "This is Another Fuc";
    },
];

$choice = rand(0,2);
var_dump($luckyDip[2]());