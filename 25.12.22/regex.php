<?php
/**
 * 
 */

 $string = 'abcdefghijklmnopqrstuvwxyz0123456789';
 $pattern = '/^abc/';//Surur kkhetre
 $pattern = '/789$/';//Surur kkhetre
 $preg = preg_match($pattern, $string);
 var_dump($preg);

 $string = 'The dog ha no food';
 $pattern = '/^d/';
 $preg_all = preg_match_all($pattern,$string,$matchs);
 var_dump($matchs);

 //Or match
 $string = "this is hello and jello";
 $pattern = '/(h|j)ello/';//Surur kkhetre
 $preg_all = preg_match_all($pattern,$string,$matchs);
 var_dump($matchs);

 //How to create shortcode feature like wordpress
 $string = "this[welcom] is not [something] is hello and jello";
 $pattern = '/\[\w+\]/';//Surur kkhetre
 $preg_all = preg_match_all($pattern,$string,$matchs);
 var_dump($matchs);
