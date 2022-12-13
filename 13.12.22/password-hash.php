<?php 
/**
 * 
 * 
 * @link https://www.php.net/manual/en/book.password.php
 * @link https://www.php.net/manual/en/function.password-hash.php
 */
$md5 = md5('Saiful');
var_dump($md5);

var_dump(sha1('123456'));

/**
 * eta protibar alada alada output dey
 * and check korar jonno password_verify() function diye korte hoy
 * 
 * 
 * PASSWORD_ARGON2I, PASSWORD_BCRYPT, 
 */
$ph_pass = password_hash('123',PASSWORD_DEFAULT );
var_dump($ph_pass);
$bistarito_jannar_func = password_get_info($ph_pass);
var_dump($bistarito_jannar_func);
$ph_pass = '$2y$10$E7siMYb8WMQ1qNJpmzzub.mQ5SCR2ZCPUuRkEzqVNQK7xW4Kh5yza';
var_dump(password_verify('123',$ph_pass));
echo '<hr>';
//Only for checking..
var_dump(password_algos());