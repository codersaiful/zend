<?php 
/**
 * Target:
 * password Validation
 * 
 */
$string = 'I\'m available at the shop';
$pattern = '/\blab\b/i';// Here \b mean: it's a full word or sotontro word
$pattern = '/lab\B/i';// Here \B mean: it's a part of word
// $pattern = '/lab/i';
$preg_match = preg_match( $pattern, $string );
var_dump($preg_match);


$string = 'I live in the whitehouse.';
$pattern = '/white()/i';
// $pattern = '/lab/i';
$preg_match = preg_match( $pattern, $string );
var_dump($preg_match);
echo "<hr>";
$password = 'MynameIs#Saiful';

$uppercase = preg_match('@[A-Z]@',$password); //egulo suru theke ses porjonto ek Ta hakolei hobe.
$loyercase = preg_match('@[a-z]@',$password); //egulo suru theke ses porjonto ek Ta hakolei hobe.
$number = preg_match('@[0-9]@',$password); //egulo suru theke ses porjonto ek Ta hakolei hobe.



var_dump($uppercase, $loyercase, $number);

