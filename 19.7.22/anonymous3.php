<?php 
$students = [
    ['name'=>'Saiful Islam','age'=> 35],
    ['name'=>'Abdul Islam','age'=> 35],
    
    ['name'=>'Ismail Islam','age'=> 25],
    ['name'=>'Rahim Islam','age'=> 16],
    
    ['name'=>'Zahidul Khan','age'=> 40],
    ['name'=>'Aziful Islam','age'=> 55],
    
];
var_dump($students);
usort($students,function($a,$b){
    return $a['age']>$b['age'] ? -1 : 1;
});
var_dump($students);