<?php 
/**
 * XML - extensible markup language
 * for store, carry and transport data
 * Released: 1990 First released
 * Recommendation by W3C at 10 February, 1998
 * 
 * Platform: Independent - It's work with all language
 * 
 * It's only one version
 * 
 * Builtin Extension:
 * SimpleXML  https://www.php.net/manual/en/book.simplexml.php
 * PHP DOMDocument https://www.php.net/manual/en/class.domdocument.php
 */

 $xml = simplexml_load_file('data.xml');



 var_dump($xml);

 $interXml = <<<xml
 <?xml version="1.0"?>
 <college>
     <student>
         <name>Saiful Islam</name>
         <mobile>01724025412</mobile>
         <email>codersaiful@gmail.com</email>
         <address>
             <presentAdress>
                 <district>Rajshahi</district>
                 <thana>Durgapur</thana>
                 <post>12121</post>
             </presentAdress>
             
             <permanentAddress>
                 <district>Rajshahi</district>
                 <thana>Durgapur</thana>
                 <post>12121</post>
             </permanentAddress>
             
         </address>
     </student>
 </college>
 xml;

 $interXmlObj = new SimpleXMLElement($interXml);
 $interXmlArr = simplexml_load_string($interXml);
 var_dump($interXmlObj);
 var_dump($interXmlArr);
