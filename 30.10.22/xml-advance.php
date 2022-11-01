<?php 
//Namespace using
//<?xml version="1.0" standalone="yes">
$xml = <<<xml
<info xmlns:student="http://w3p.com/student" xmlns:fruit="http://w3p.com/fruit">
    <student:table>
        <student:name>Saiful</student:name>
        <student:age>Saiful</student:age>
    </student>
    <fruit:table>
        <fruit:name>Saiful</fruit:name>
        <fruit:age>Saiful</fruit:age>
    </fruit>

</info>
xml;
//Error Show koreche.
$sxe = new SimpleXMLElement($xml);
var_dump($sxe->getDocNamespaces());