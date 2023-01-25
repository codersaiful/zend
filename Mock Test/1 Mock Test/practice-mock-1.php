<?=
//Question 10
 (int) ((0.1 + 0.7) * 10); ?>
<?php 

//6. Question A: C (bool)true
var_dump((bool)5.8); 

//12
switch(3){
    case 1: print("Case 1");break;
    case 2: print("Case 2");break;
    case 3: print("Case 3");break;
    case 4: print("Case 4");break;
    case 5: print("Case 5");break;
    default: print('Default');
}
//Q: 14
$x = 0;
$i;
for($i = 0; $i < 5; $i++) {
    // var_dump($i);
 $x += $i;
}
var_dump($x);

$a = -20 % -8;
var_dump($a);
?>
<php echo (int) "Jason 1235";?>
<hr>
<?php 
// 10 = $x;
// var_dump($x);
$a = 50 - 10 % 4;
var_dump($a);


$a = 1;
$b = 2;
$c = 0xAF;
$d = $b + $c;
$e = $d * $b;
$f = ($d + $e) % $a;
print($f + $e);echo '<hr>';
$b = 44;
echo ($a <=> $b);