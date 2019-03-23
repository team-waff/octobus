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
$myObj->lat = $coords[$random]["lat"];
$myObj->lng = $coords[$random]["lng"];

$myJSON = json_encode($myObj);

echo $myJSON;
?>
