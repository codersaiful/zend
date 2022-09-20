<?php

use myTrait as GlobalMyTrait;

interface A{

}
interface B{

}
trait MyTrait{
    public $color = 'red';
    public $border = '1px solid red';
    public function saiful(){
        return "rrr";
    }
    private function priv(){
        return 'private';
    }
}

trait myTrait2{
    public $screen = '100%';
    public function saiful(){
        return "myTrait2";
    }
}

class myClass{
    use MyTrait,myTrait2{
        MyTrait::saiful insteadof myTrait2;
        myTrait2::saiful as mysaiful;
        MyTrait::saiful as othersaiful;
        priv as public;
    }
    /**
     * same method thakle
     * 
     */
}
$obj = new myClass;
var_dump($obj->saiful());
var_dump($obj->mysaiful());
var_dump($obj->othersaiful());
var_dump($obj);
var_dump($obj->);