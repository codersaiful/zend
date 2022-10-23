<?php 

/**
 * 
 */
class Test_Static{
    public static $count=0;
    public static $counter=1;

    public static function counter(){
        echo self::$count++, "<br>";
    }
}
Test_Static::counter();
Test_Static::counter();
Test_Static::counter();
Test_Static::counter();