<?php 

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
var_dump($interXmlObj->student,$interXmlObj);
 echo $interXmlObj->student->asXML();