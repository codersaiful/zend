<?php 

$sxe = simplexml_load_file('data.xml');
var_dump($sxe->xpath('student/address/presentAdress'));
var_dump($sxe);