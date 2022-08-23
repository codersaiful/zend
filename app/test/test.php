<?php 
namespace App\Test;

class Test implements Ext_Interface{
    public $name = "Test";
    public $address = __CLASS__;
    public function get_id(){
        return 'test';
    }

    public function get_name()
    {
        return __CLASS__;
    }
    public function get_details()
    {
        return $this;
    }
}
