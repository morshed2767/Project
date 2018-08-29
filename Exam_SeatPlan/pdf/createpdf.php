<?php
require 'pdfcrowd.php';

try
{   
    // create an API client instance
    $client = new Pdfcrowd("morshed2767", "7b06df38d2059475e0de3d89626e64d9");

    // convert a web page and store the generated PDF into a $pdf variable
     $pdf = $client->convertURI('http://www.google.com/');


    // set HTTP response headers
    header("Content-Type: application/pdf");
    header("Cache-Control: max-age=0");
    header("Accept-Ranges: none");
    header("Content-Disposition: attachment; filename=\"google_com.pdf\"");

    // send the generated PDF 
    echo $pdf;
}
catch(PdfcrowdException $why)
{
    echo "Pdfcrowd Error: " . $why;
}
?>