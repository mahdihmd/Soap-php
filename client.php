<?php

$soap = new SoapClient("https://example.com/soap/server.php?wsdl");


echo $soap->soap_run("hello");
