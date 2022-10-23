<?php 
session_start();
$_SESSION['foo'] = '

    function foo(){
        echo "I am stored n session function named foo.";
    }

';

var_dump($_SESSION);
