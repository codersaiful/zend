<?php 
function makeGreting($name="Welcome",$age=25)
{
    echo "Name: $name and Age: $age";
}
echo makeGreting("Saiful",35);

$anonymousFunc = function($name,$age){
    return "N: $name and A: $age";
};

var_dump($anonymousFunc("Hello",22));

echo '<hr>';
function shout($message)
{
    echo $message();
}
shout(function(){
    return "Hello";
});