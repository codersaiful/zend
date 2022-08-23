<?php 

spl_autoload_register(function($className){
    include_once $className . '.php';
});

$member = new Member();


$member->username = "Saiful";

var_dump($member);