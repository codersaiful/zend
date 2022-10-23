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

 class PropertyLoading{
    private $data = [];

    /**
     * It used only for making property
     *
     * @param [type] $property_name
     * @param [type] $property_value
     */
    public function __set($property_name,$property_value){
        $this->data[$property_name] = $property_value;
    }

    /**
     * property na thakle seta declear korobe.
     *
     * @param [type] $property_name
     * @return void
     */
    public function __get( $property_name ){
        return $this->data[$property_name] ?? false;
    }
    
    public function getPropertyValue(){
        var_dump($this->data);
    }

    public function __isset($property_name){
        return $this->data[$property_name] ?  "Yes" : "No";
    }
 }

 $obj = new PropertyLoading();
 $obj->name = "Saiful";
 $obj->age = "35";
 $obj->address = "Dhaka, Bangladesh";

 var_dump($obj);
 var_dump($obj->getPropertyValue());
 var_dump($obj->saiful);

 var_dump(isset($obj->skslsls));
