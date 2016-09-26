<?php

require_once "vendor/autoload.php";

$url = $_SERVER['PATH_INFO'];

$routerClass = new \ES\Route();
$results = $routerClass->parse($url);

print $results;


//$es = new \ES\Engine();

?>
