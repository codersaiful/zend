<?php 
/**
 * Todays Topic:
 * __serialize()
 * __unserialize()
 * __wakeup()
 * 
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
        return ['age','address'];
    }
    
    /**
     * Only for unserialize er jonno
     * onno kono kaj nai
     */
    public function __wakeup()
    {
        
    }

}

$obj = new Magic;
$obj->setName("Code Astrology");
var_dump($obj);
$magitString = serialize($obj);
var_dump($magitString);

