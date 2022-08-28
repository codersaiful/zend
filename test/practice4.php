<?php 
/**
 * Question: 30
 * I got error on this example
 * ss: https://prnt.sc/e0HDy-OelsH-
 */
function counter($start, &$stop) {
if ($stop > $start) {
return;
}
counter($start--, ++$stop);
}
$start = 5;
$stop = 2;
// counter($start, $stop);

/**
 * Q: 31
 * Ans: b
 */


function check_args_amount(...$args){
    var_dump(func_num_args());
    var_dump(func_get_arg(0));
    var_dump(func_get_args());

    return $args;
}

$my_args = [
    'hello' => 'Hello World',
    'world' => "This is World",
    'saiful' => 'My name is Saiful',
];
check_args_amount(111,222,333,444,555);

/**
 * Question: 32
 * 
 */

 function modifyArray(&$array){
    foreach( $array as &$value ){
        $value = $value + 1;
    }
    $value = $value + 2;
 }

 $my_array = [1,2,3];
 var_dump($my_array);
 modifyArray($my_array);
 var_dump($my_array);

 /**
  * Q: 33
  */
  function fibonacci(&$x1=0, &$x2=1){
    $result = $x1 + $x2;
    $x1 = $x2;
    $x2 = $result;
    return $result;
  }

  for($i=0;$i<=10;$i++){
    echo fibonacci() . ',';
  }