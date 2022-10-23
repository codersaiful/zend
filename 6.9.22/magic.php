<?php 
/**
 * Todays Topic:
 * __serialize()
 * __unserialize()
 * __wakeup()
 * 
 * 
 * @link https://www.php.net/manual/en/language.oop5.magic.php
 */
class Magic{
    public $name = "Saiful";
    public $age = 35;
    public $time;
    private $address = "Dhaka,Bangladesh";

    public function __construct()
    {
        $this->time = getdate();
    }
    public function getName(){
        return $this->name;
    }
    
    public function setName( $name ){
        $this->name =$name;
    }

    

    //ekhono dekhini
    public function __unserialize(array $data): void
    {
    
    }

    /**
     * It's only for serialize er jonno
     * 
     *
     * @return array
     */
    public function __sleep()
    {
        return ['name'];
    }
    /**
     * It's only for serialize
     * sudhu selected item e return korbe
     * serialize a
     *
     * @return array
     */
    public function __serialize(): array
    {
        return ['name'];
    }
    // /**
    //  * Only for unserialize er jonno
    //  * onno kono kaj nai
    //  */
    // public function __wakeup()
    // {
        
    // }

}

$obj = new Magic;
$obj->setName("Code Astrology");
var_dump($obj);
$magitString = serialize($obj);
var_dump($magitString);
var_dump(unserialize('O:5:"Magic":1:{s:4:"name";s:14:"Code Astrology";}'));//__sleep()
var_dump(unserialize('O:5:"Magic":1:{i:0;s:4:"name";}'));//__serialize()

