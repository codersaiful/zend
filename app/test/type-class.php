<?php 
namespace App\Test;

class Type_Class{

    public $front = [];
    public function __construct(Test $test)
    {
        $this->front = $test;
        // var_dump($test);
    }
}