<?php
include('dao/ChildDAO.php');
include('dao/AccountableDAO.php');
include('controllers/QueryController.php');
include('models/Child.php');
include('models/Accountable.php');

$split_uri = explode("/", $_SERVER['REQUEST_URI']);
$_bypass = ['octobus', 'app', ''];
$_models = ['accountable'];
$parsed_uri = array();
$controller = new QueryController();

foreach ($split_uri as $v) {
    if(!in_array($v, $_bypass)) {
        array_push($parsed_uri, $v);
    }
}

if(in_array($parsed_uri[0], $_models)) {
    $model = $parsed_uri[0];
    unset($parsed_uri[0]);
    $obj = $controller->get($model, $parsed_uri);
    echo json_encode($obj);
} else {
    //print doc
    include('doc.html');
}
