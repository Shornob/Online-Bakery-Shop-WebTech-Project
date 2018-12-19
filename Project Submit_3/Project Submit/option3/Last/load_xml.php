<?php
function loadArray()
{   global $ar;
    $xml=simplexml_load_file("user_data.xml") or die("Error: Cannot create object");
    
    
    foreach($xml->person as $st){
	  $ar[(string)$st->name]=(string)$st->password;
}
}

?>