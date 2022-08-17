<?php

/**
 * Method Chaining for Static method
 * 
 * @since 1.0.0
 * 
 * @author Saiful Islam <codersaiful@gmail.com>
 * 
 * @link https://www.w3programmers.com/php-oop-method-chaining/
 */
class Math{
    public static $number;
    public static function init( $num )
    {
        static::$number = $num;
        return new static;
    }

    public static function add($num){
        static::$number += $num;
        return new static;
    }
    public static function sub($num){
        static::$number -= $num;
        return new static;
    }

    public static function getResult(){
        return static::$number;
    }

}
Math::init(100);
var_dump(Math::getResult());
Math::init(20)->add(10);
var_dump(Math::getResult());
Math::add(50)->sub(5);
var_dump(Math::getResult());