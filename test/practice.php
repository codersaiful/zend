<?php 

/**
 * QUESTION: 3
What is the output of the following code?
echo "1" + 2 * "0x02";
আসলে যেকোন স্ট্রিং এর সাথে নাম্বার গুন করলে জিরো হয় আর নটিস জেনেরেট করে। 
এখানে মুলত শুধু ১ আসবে। 
 */
echo 1 + 2*"0x02";
//Ans: 1, https://prnt.sc/FGFUACFLTeLb

/**
 * QUESTION: 4
What is the result of the following bitwise operation in PHP?
1 ^ 2
tobe check 
 */
var_dump("--XOR",1^2,2^3,7^7,7^3);
var_dump("--AND",32&1,32&31,32&32,32&445);
var_dump("--OR",32|31,32|32,32|45,32|145,32|345,32|323);

/**
 * QUESTION: 5
What is the output of the following code?
echo "22" + "0.2", 23 . 1;

 */
echo "22" + "0.2", 23.1;
//Outpur: 22.223.1 https://prnt.sc/HKQDF_WuH2Lh
echo '<hr>QUESTION: 6<br>';
/**
 * QUESTION: 6
What is the output of the following code?
$first = "second";
$second = "first";
echo $$$first;
//$$second
//$first = second
 */
$first = "second";
$second = "first";
echo $$$first;
//Output second

/**
 * QUESTION: 7
What is the output of this code?
$world = 'world';
echo <<<'TEXT'
hello $world TEXT;
//Explain:
starting এ কোটেশান থাকলে ভেরিয়েবল এক্সিকিউট করবে না। আর সঠিক হতে হলে
অবশ্যইত লাস্টের EOT single line এ থাকতে হবে কোনো স্পেস/ট্যাব ছাড়া। 
Answer: C. PHP Parser error
 */
$world = 'world';
echo <<<'TEXT'
<br>hello $world TEXT;
//Output:
Parse error: syntax error, unexpected end of file, expecting variable (T_VARIABLE) or heredoc end (T_END_HEREDOC) or ${ (T_DOLLAR_OPEN_CURLY_BRACES) or {$ (T_CURLY_OPEN) in G:\wamp64\www\zend\test\practice.php on line 59


TEXT;    


/**
 * QUESTION: 8
What is the output of the following code?
var_dump(boolval(-1));

 */
var_dump(boolval(-1));
//Output: true 

/**
 * QUESTION: 9
 * What is the output of the following code?
var_dump(boolval([]));
 */
var_dump(boolval([]));
//Output: false

/**
 * QUESTION: 10
Type hinting in PHP allows the identification of the following variable types: (Choose 2)

//It's Confused to me.
 */
$abc = (Integer) '1';
var_dump($abc,gettype($abc));