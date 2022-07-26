<?php 
$arrs = ["A","B","C"];
foreach($arrs as &$val){
    $val = "Somthing" . $val;
}

//extract()
//Array'r key gulo ke variable kore dey

var_dump($arrs);
// foreach($students as list($name,$age,$address))
// {
//     echo $name,$age,$address;
// }


//kon value kotobar ache bole deben
array_count_values($arrs);
//current() //Array function
//next()// array fnc
//end() //array func
//reset() //array again reset hobe
//key() //function las ki dekhabe

//array_keys
//array_values()

//array_sum() //sobgulor value jog korbe
//array_product() sobgulor value gun korbe
//array_flip() //key k value, r value ke key
//array_reverse() //descending korobe
//array_key_exist() //key ache ki na
