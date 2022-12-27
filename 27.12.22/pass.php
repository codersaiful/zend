<?php
/**
 * Practice by me.
 * Class hoyni aaj.
 * 
 */
$password = 'saiful';
$pattern = '/(\w){8,12}/';
$preg_match = preg_match($pattern, $password);
var_dump($preg_match);


/**
 * Regular Expression Pattern Special Sequence::
 * \d - Matches any numeric number as [0-9]=>[\d]
 * \D - Matches any non numeric number as [^0-9]=>[\D]
 * \s - Matches any whitespace charecter[\t\n\r\f\n\v]=>[\s] Example: tab,new line,verticle space
 * \S - Matches any non whitespace charecter[^\t\n\r\f\n\v]=>[\S] Example: tab,new line,verticle space
 * \w - Matches any alpthanumeric charecter [a-zA-Z0-9_]=>[\w]
 * \W - Matches any non alpthanumeric charecter [^a-zA-Z0-9_]=>[\W]
 * 
 * Modifiers:::
 * i - Ignore Case, case nsensitive
 * s - Include New line
 * x - Extended for comments and whitespace
 * m - Multiple Line
 * b - Word Boundary
 * B - Not word boundary
 * A - Start of subject
 * Z - End of subject
 * z - End of subject
 * G - First matching possition in subject
 * 
 * Meta Characters:
 * ^- Start of Subject (or line and Miltple Mode)
 * $ - End of subject
 * [ - Start Character class defination
 * ] - End Character class defination
 * | - Alternates. eg matches a or b => (a|b)
 * ( - Start subpattern
 * ) - End subpattern
 * \ - Escape character
 * 
 * Quantifier:
 * n* - zero or more times
 * n+ - One or more time
 * n? - Zero or one time
 * {n} - n occurence exactly
 * {n,} - Atleast n occurence
 * {n,m} - Between n and m occurrences
 * 
 * example:
 * forum er link
 * 
 * @link https://www.php.net/manual/en/function.preg-match.php
 * @link https://www.youtube.com/watch?v=5ckmCW8png0&t=1153s&ab_channel=LearnwithSumit-LWS-Bangladesh
 */