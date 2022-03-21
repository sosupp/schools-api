<?php
declare(strict_types=1);
/**
 * This is the front controller 
 * for the application
 */



// content type header
header("Content-type: application/json; charset=UTF-8");


//  Get path
$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

// split the parts of the url
$parts = explode("/", $path);

// pull out resource and ID
$resource = $parts[1];
$id = $parts[2] ?? null;

if ($resource != 'schools') {
    http_response_code(404);
    exit;
}
// echo $resource . "/ ". $id;

$method = $_SERVER["REQUEST_METHOD"];

// require_once __DIR__ . "../src/SchoolsController.php";

require_once __DIR__ . '/vendor/autoload.php';

//  handle exceptions - general with JSON format
set_exception_handler("ErrorHandler::handleException");



$school = new SchoolsController;
$school->porcessRquest($method, $id);


