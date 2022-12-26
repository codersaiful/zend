<?php
$string = 'This is a [shortcode] like a [password] and a [username]. should not [123] or [1number] but can choose [number1] or [_12114].';
$string .= ' This is a [shor_tcode] or [ shor_tcode] like a [.password] and a [username attr="dhaka"].';
// $pattern = '/\[\w+\]/';
$pattern = "/\[\w+\]/";
$preg_bool = preg_match($pattern,$string);
$preg = preg_match_all($pattern, $string, $matches);

var_dump($matches,$preg_bool);

$pattern = "/\[[a-zA-Z._]+\]/";
$preg_bool = preg_match($pattern,$string);
$preg = preg_match_all($pattern, $string, $matches);

var_dump($matches,$preg_bool);