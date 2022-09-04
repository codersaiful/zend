<?php 
/**
 * PHP OOP Overloading (It's not overwrite)
 * 1. Property Overloading
 * 
 *  __set(),__get(), __unset(), __isset() only for property
 * 2. Method Overloading
 *    __call(), callStatic()
 * 
 * @link https://www.php.net/manual/en/language.oop5.magic.php
 * 
 */
class Method_Overloading{

    public function sayHello(){
        echo "Wellcome";
    }

    public function __call($methodName, $methodArgs){
        var_dump($methodName, $methodArgs);
    }

    public static function __callStatic($name, $arguments)
    {
        var_dump($name, $arguments);
    }
}

$obj = new Method_Overloading();
$obj->something(122,"Saiful","welcome");
Method_Overloading::notsomething();