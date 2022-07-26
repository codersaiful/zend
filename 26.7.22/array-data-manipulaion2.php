<?php 
/**
 * Array Filter
 * array_filter()
 */

 $arr = ['a'=>'A','b'=>'B'];
 $filArr = array_filter($arr,function($k){
        var_dump($k);
        return true;
     },ARRAY_FILTER_USE_KEY);

 var_dump($filArr);