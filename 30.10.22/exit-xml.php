<?php 

$sxe = simplexml_load_file('data.xml');
$sxe->student->addChild('fathar-name','Rezaul Haque');
$sxe->asXML('data-others.xml');
var_dump($sxe);