<?php 
$a = false;
if($b = true){
    print("true");
}else{
    print("false");
}
echo '<hr>';

//Q. 5 
for($x = 1; $x <= 2; $x++){
    // var_dump("x:" . $x);
    for($y = 1; $y <= 3; $y++){
        // var_dump("y:" . $y);
        if($x == $y) continue;
        print("x= $x y= $y<br>");
    }
}
/**
Output:
x= 1 y= 2
x= 1 y= 3
x= 2 y= 1
x= 2 y= 3
 */
// $a = `ls -l`;