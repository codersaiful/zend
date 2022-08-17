<?php 

/**
 * Topic:
 * * Method Chaining
 * * Static method chaingin
 * ==> return new static;
 * or ==> return new self;
 * 
 * static ta aseche php 5.7 theke
 */

 class Math{
    public static $val;

    public static function init($var){
        static::$val = $var;
        return new static;
    }
    public static function add($var){
        static::$val += $var;
        return new static;
    }
    public static function get(){
        echo static::$val;
    }
 }

Math::init(22)->add(100);
Math::get();
echo "<br>";
/**
 * static value ekbar set hole
 * pore chaining korar somoy ager data'r
 * sathe add hobe.
 */
Math::add(100);
Math::get();
echo "<br>";
echo "22" + "0.2", 23.1;
/**
 * static procedural a kaj kore.
 */
/**
 * single quote 
 * dile name NowDoc
 * ar double qute or faka hole
 * Here doc
 */
/** 
 Question Solution:
 1. 
 2. 
 */