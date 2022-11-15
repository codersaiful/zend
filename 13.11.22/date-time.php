<?php 
var_dump(time());
var_dump(date_default_timezone_get());
date_default_timezone_set("Asia/Dhaka");
var_dump(date('m/d/y h:i:s A'));

$now = getdate();
var_dump($now);
$obj_now = new DateTime();
var_dump($obj_now);