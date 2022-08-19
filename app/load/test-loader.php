<?php 
namespace App\Load;
use App\Test\Test;
use App\Test\Type_Class;

// $tt = new Test();
$other = new Type_Class(new Test());
var_dump($other);