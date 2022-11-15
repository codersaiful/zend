<?php 
$dom = new DOMDocument('5','utf-8');
$root = $dom->createElement('html');
$dom->appendChild($root);

$head = $dom->createElement('head');
$root->appendChild($head);

$title = $dom->createElement('title','Hello World Title');
$head->appendChild($title);

$body = $dom->createElement('body');
$root->appendChild($body);

$h1 = $dom->createElement('h1', "This is testing");
$h1->setAttribute('hello','World');
$body->appendChild($h1);

class DomTable{
    public $dom;
    public function __construct(DOMDocument $dom)
    {
        $this->dom = $dom;
    }

    public function createHead(){

    }
}
/**
 * Now table
 * 
 */
$table = $dom->createElement('table');

echo $dom->saveHTMLFile('my-html2.html');
