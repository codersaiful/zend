<?php
/**
 * My Practice
 * //Class hoyni ei dine
 */
$string = 'This [is] a [shortcode] like a [Password] and a [userName]. should not [123] or [1number] but can choose [number1] or [_12114].';
$string .= ' This is a [shor_tcode] or [ shor_tcode] like a [.password] and a [username attr="dhaka"].';
$string .= ' also test [] - empty and with special [special!@#$]';
$pattern_for_all = '/\[\w+\W*\]/';
$pattern = '/\[[a-zA-Z_]\w+\]/';
$preg = preg_match_all($pattern, $string, $matches);
var_dump($matches);

$preg = preg_match_all($pattern_for_all, $string, $matches_for_all);
var_dump($matches_for_all);