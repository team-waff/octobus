<?php
include('fake_dao/RideDAO.php');
include('fake_dao/ChildDAO.php');
include('fake_dao/AccountableDAO.php');
include('controllers/QueryController.php');
include('models/Child.php');
include('models/Accountable.php');
include('models/Ride.php');

$split_uri = explode("/", $_SERVER['REQUEST_URI']);
$_bypass = ['octobus', 'app', ''];
$_models = ['accountable', 'child', 'ride'];
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
    echo json_encode($controller->get($model, $parsed_uri));
} else {
    echo json_encode(false);
    include('doc.html');
}
