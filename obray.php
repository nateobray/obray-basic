<?php

// starttime and error handling
$starttime = microtime(TRUE);
error_reporting(E_ALL);
ini_set('display_errors', true);

$loader = require_once "vendor/autoload.php";

$factory = new \obray\oFactory();
$invoker = new \obray\oInvoker();

// setup router
$router = new \obray\oRouter($factory, $invoker, NULL, TRUE, $starttime);
$router->addEncoder("\\obray\\encoders\\oJSONEncoder","data","application/json");
$router->addEncoder("\\obray\\encoders\\oHTMLEncoder","html","text/html");
$router->addEncoder("\\obray\\encoders\\oErrorEncoder","error","application/json");
$router->addEncoder("\\obray\\encoders\\oCSVEncoder","csv","text/csv");
$router->addEncoder("\\obray\\encoders\\oTSVEncoder","tsv","text/tsv");
$router->addEncoder("\\obray\\encoders\\oConsoleEncoder","console","console");

// route incoming request either through CLI or HTTP request
if( PHP_SAPI === 'cli' ){
    $response = $router->route($argv[1],array(),TRUE);
} else {
    $response = $router->route($_SERVER["REQUEST_URI"]);
}
