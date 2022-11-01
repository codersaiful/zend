<?php 
/**
 * DOMDocument
 * https://www.php.net/manual/en/class.domdocument.php
 * 
 * 
 */
$myhtml = <<<eof
<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    
 </body>
 </html>
eof;
// ob_start();
// include 'html.php';
// $html = ob_get_clean();
 $dom = new DOMDocument();

//  var_dump($dom,$html);

$dom_html = $dom->loadHTML($myhtml);
print_r($dom_html);
var_dump($dom);


$doc = new DOMDocument();
$cont = $doc->loadHTMLFile('html.php');
var_dump($doc);