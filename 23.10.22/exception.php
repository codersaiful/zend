<?php 

class MyException extends Exception{
    public function errorMsg(){
        $errMsg = "The emai Address: " . $this->getMessage() . " on ";
        $errMsg .= "Line: " . $this->getLine() . " and ";
        $errMsg .= "File: " . $this->getFile() . " is Invalide ";

        return $errMsg;
    }
}

$email = 'codersaiful@gmail.com';

try{
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        throw new MyException($email);
    }
    try{
        if(strpos($email, 'gmail') !== false){
            throw new Exception("$email is funky");
        }
    }catch( Exception $errr ){
        echo $errr->getMessage();
    }
}catch(MyException $err){
    echo $err->errorMsg();
}