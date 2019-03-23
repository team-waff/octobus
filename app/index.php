<?php
include('fake_dao/RideDAO.php');
include('fake_dao/ChildDAO.php');
include('fake_dao/AccountableDAO.php');
include('models/Child.php');
include('models/Accountable.php');
include('models/Ride.php');
include('controllers/Router.php');

$router = new Router($_SERVER['REQUEST_URI'], $_GET, $_POST);
