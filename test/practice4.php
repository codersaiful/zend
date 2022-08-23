<?php 
/**
 * Question: 30
 * 
 */
function counter($start, &$stop) {
if ($stop > $start) {
return;
}
counter($start--, ++$stop);
}
$start = 5;
$stop = 2;
counter($start, $stop);
