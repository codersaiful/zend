<?php 

/**
 * 
 */
class lateStaticBinding{
    public static $count=0;
    public static $counter=1;

    public static function counter(){
        echo self::$count++, "<br>";
    }
}
lateStaticBinding::counter();
lateStaticBinding::counter();
lateStaticBinding::counter();
lateStaticBinding::counter();