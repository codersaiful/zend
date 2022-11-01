<?php 
$doc = new DOMDocument();
$doc->loadHTMLFile('html.html');

$cont = $doc->getElementsByTagName('h1');
// var_dump($doc);
var_dump($cont);

foreach($cont as $content){
    var_dump($content);
}