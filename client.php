<?php

$soap = new SoapClient("https://cheetah-tool.com/soap/server.php?wsdl");


echo $soap->soap_run("hello");
