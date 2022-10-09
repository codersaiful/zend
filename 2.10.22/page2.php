<?php 
session_start(); 
var_dump($_SESSION['foo']);
eval('?>' . $_SESSION['foo']);

foo();
