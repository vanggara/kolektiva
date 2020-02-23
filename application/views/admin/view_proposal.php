<?php 
// Store the file name into variable 
foreach ($content->result_array() as $key): 
    // The location of the PDF file 
    // on the server 
    $filename = "assets//uploads//proposal//".$key['proposal'];
    // $file = $key['nama_bootcamp']; 
    // $filename = $key['nama_bootcamp']; 
endforeach;

  
// Header content type 
header("Content-type: application/pdf"); 
  
header("Content-Length: " . filesize($filename)); 
  
// Send the file to the browser. 
readfile($filename); 

?> 
