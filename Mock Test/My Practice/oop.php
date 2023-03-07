<?php

use myClass as GlobalMyClass;

class myClass
{
    function myMethod()
    {
        return 111;
    }

    public function getName()
    {
        return get_class($this);
    }
    protected function proTMethod(){
        return 222;
    }
    
}

class myClassss extends myClass
{

    function myMethod()
    {
        return 4545;
    }
    
    
}

$sss = new myClass();
$sss222 = new myClassss();

var_dump(get_parent_class($sss222));
echo '<hr>';
var_dump(method_exists('myClass','proTMethod'));





var_dump(get_class_methods('myClass'), is_callable([$sss, 'getName']));
var_dump(is_object($sss), $sss->getName());
var_dump(is_a($sss, 'myClass'));

var_dump(get_class($sss));
var_dump(class_implements($sss));