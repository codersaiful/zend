<?php 

/**
 * Topic:
 * __clone()
 * __destruct()
 */
class Test{
    public $name;
    public $mobile;

    public function __construct($name, $mobile)
    {
        $this->name = $name;
        $this->mobile = $mobile;
    }

    /**
     * It will call, when only cloning object.
     * clone na korle ager object er property o change hoye jay
     * 
     *
     * @return void
     */
    public function __clone()
    {
        $this->name = "This is clone";
        $this->mobile = '000000';
    }

    /**
     * keu function hisebe obj call korle ja dekhabe
     *
     * @return void
     */
    public function __invoke()
    {
        echo 'call as fun';
        return true;
    }

    public function __debugInfo()
    {
        return ['aaa' => 'kkk'];
    }
}

$obj1 = new Test("Saiful", '014555');
var_dump($obj1);

$obj2 = $obj1;
$obj2->name = "CodeAstrology";
$obj1->name = "Astrology";
var_dump($obj1);
var_dump($obj2);

$obj3 = clone $obj1;
$obj3->name = "Clone";
var_dump($obj1,$obj3);

//clone korle  new  obj create hoy. tachara ager tar o value change hoye jabe.

var_dump($obj1("SS","00"));
