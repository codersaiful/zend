<?php 
class Anonymous{
    public function log(){
        return "this is a sampple log";
    }
}

$obj = new Anonymous();
var_dump($obj);
//----------------
/**
 * Anonymous Class constructor korte 
 * chaile class er por parenthesis diye 
 * $data/$message pathate hobe.
 */
$message = "This is a log";
$anonymous = (new class($message){
    public $name = "Saiful";

    public function __construct($message)
    {
        $this->message = $message;
    }
});
var_dump($anonymous);

class Test{
    public $test;
}
trait myTrait{

}
interface Tnt{
    public function get();
}
$message = "This is a log";
$anonymous = (new class($message) extends Test implements Tnt{
    public $name = "Saiful";

    public function __construct($message)
    {
        $this->message = $message;
    }
});
var_dump($anonymous);