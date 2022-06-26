<?php 
/**
 * array_filter()
 * array_map()
 * 
 */


 $arr = array(
    'Saiful',
    120,
    'Dhaka',
    array(
        'age' => 23,
        'name' => "Fazle bari",
    )
 );

 var_dump($arr);

 $new_arr = array_filter($arr, function($item){
    return is_string($item);
 });

 $map_arr = array_map(function($item){
    if( is_numeric( $item ) ) return $item + 1000;
    if(is_string($item)) return $item . " Extra Text";
    if(is_array($item)) return false;
 },$arr);
 
 var_dump($map_arr);
