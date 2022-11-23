<?php 

$text = "J Mpwf Zpv";
$real = "I Love You";

$cipher = 'aes-128-gcm';
$methods = openssl_get_cipher_methods();
if(in_array($cipher, $methods)){
    $ivlen = openssl_cipher_iv_length($cipher);
    $iv = openssl_random_pseudo_bytes($ivlen);
    $key = 'zcpe2';
    $cipherText = openssl_encrypt($real,$cipher,$key,$option=0,$iv,$tag);
    // echo $cipher;
    echo($cipherText);
    echo '<br>';
    $backText = openssl_decrypt($cipherText,$cipher,$key,$option,$iv,$tag);
    echo $backText;
    var_dump($ivlen,$iv);
}

var_dump(openssl_get_cipher_methods());