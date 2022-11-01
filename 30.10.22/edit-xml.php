<?php 

// $sxe = simplexml_load_file('data-others-another.xml');
// $rand_name = 'xml' . rand(78, 787878);
// $rand_value = 'value:' . rand(9999, 9787878);
// $total_items = count($sxe->student);
// $rand_index = rand(0,($total_items-1));
// var_dump($rand_index);
// $sxe->student[$rand_index]->addChild($rand_name,$rand_value);
// $sxe->asXML('data-others-another.xml');
// var_dump($sxe);


$sxe = simplexml_load_file('data.xml');
$rand_name = 'xml' . rand(78, 787878);
$rand_value = 'value:' . rand(9999, 9787878);
$total_items = count($sxe->student);
$rand_index = rand(0,($total_items-1));
var_dump($rand_index);
$sxe->student[$rand_index]->addChild($rand_name,$rand_value);
var_dump($sxe->student[3]);
var_dump($sxe);