<?php

// turn off WSDL caching
ini_set("soap.wsdl_cache_enabled","0");


function soap_run($arg){

    if($arg=="hello"){
        return "How Are You ?";
    }else{
        return "Not match";
    }
}


$soap_server =  new SoapServer("wsdl.wsdl");

$soap_server->addFunction("soap_run");

$soap_server->handle();