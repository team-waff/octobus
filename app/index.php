<?php
include('controllers/controllerFactory.php');
$split_uri = explode("/", $_SERVER['REQUEST_URI']);
$_bypass = ['octobus', 'app', ''];
$_models = ['accountable'];
$parsed_uri = array();
$controller = new controllerFactory();

foreach ($split_uri as $v) {
    if(!in_array($v, $_bypass)) {
        array_push($parsed_uri, $v);
    }
}

if(in_array($parsed_uri[0], $_models)) {
    $model = $parsed_uri[0];
    unset($parsed_uri[0]);
    $controller->get($model, $parsed_uri[0]);
}

var_dump($parsed_uri);
