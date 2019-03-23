<?php

$random = rand(0, 3);

$coords = array(
  array(
    "lat" => "50.7185525",
    "lng" => "4.6102546"
  ),
  array(
    "lat" => "50.7186476",
    "lng" => "4.6111773"
  ),
  array(
    "lat" => "50.7186476",
    "lng" => "4.6111773"
  ),
  array(
    "lat" => "50.7186476",
    "lng" => "4.6111773"
  ),
);

$myObj = new stdClass();

// start pos
$myObj->start_lat = "50.7185525";
$myObj->start_lng = "4.6111773";

// current pos
$myObj->now_lat = $coords[$random]["lat"];
$myObj->now_lng = $coords[$random]["lng"];

// bus status : waiting | riding | stop | error
$myObj->status = "riding";

$myJSON = json_encode($myObj);

echo $myJSON;
?>
