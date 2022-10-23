<?php 
/**
 * Exception Handle
 * 
 */
class CustomException extends Exception{
    public function getErrors(){
        var_dump($this);
    }
}
//  error_reporting(0);//0 dile kchu dekhabena.
function checkNum($num){
    if($num <= 0){
        throw new Exception("Please insert Getter Number");
        // throw new CustomException("Please insert Getter Number");
    }else{
        return $num;
    }
}

//mailto:me@hasin.me

echo checkNum(0);

try{
    echo checkNum(0);
} catch(CustomException $e){
    $e->getErrors();
    // echo $e->getMessage();
    // var_dump($e);
}