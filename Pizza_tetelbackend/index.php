<?php

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE');

/* fogadja az url kéréseket és megválaszolja azokat
  GET http://localhost/Pizza_tetelbackend/index.php?tetel -> minden vevő
  GET http://localhost/Pizza_tetelbackend/index.php?tetel/{id} -> adott ügyfél
  POST http://localhost/Pizza_tetelbackend/index.php?tetel -> létrehoz vevőt
  PUT http://localhost/Pizza_tetelbackend/index.php?tetel/{id} -> modosit adott vevot
  DELETE http://localhost/Pizza_tetelbackend/index.php?tetel/{id} -> torol adott vevot
 */

$keresSzoveg = explode('/', $_SERVER['QUERY_STRING']);
if ($keresSzoveg[0] === "tetel") {
    require_once 'tetel/index.php';
} else {
    http_response_code(404);
    $errorJson = array("message" => "Nincs ilyen api!");
    return json_encode($errorJson);
}