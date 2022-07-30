<? echo "Hello"; //short tag // Need short_open_tag enabled ?>
<?= "Hello" //short echo tag ?>
<hr>
<?php 
echo "Welcome","To","World";
echo 1,2,3;
echo '<hr>';
/**
 * if start by 0, it consider as octal
 * if 0x, it Hexa Decimal
 * if 0b, it Binary
 */
echo 0b101;
var_dump(012);
var_dump(01724);
var_dump(0b1101);
var_dump(0b101011);
echo '<hr>';
var_dump(0x10,0xA);
var_dump(0xABC1);