<?php

$random = rand(0, 3);

$coords = array(
  array(
    "lat" => "50.718123",
    "lng" => "4.611852"
  ),
  array(
    "lat" => "50.718159",
    "lng" => "4.611916"
  ),
  array(
    "lat" => "50.718219",
    "lng" => "4.612040"
  ),
  array(
    "lat" => "50.718303",
    "lng" => "4.612193"
  ),
  array(
    "lat" => "50.718380",
    "lng" => "4.612356"
  ),
);

$myObj = new stdClass();

// start pos
$myObj->start_lat = "50.718123";
$myObj->start_lng = "4.611852";

// end pos
$myObj->end_lat = "50.718380";
$myObj->end_lng = "4.612356";

// current pos
$myObj->now_lat = $coords[$random]["lat"];
$myObj->now_lng = $coords[$random]["lng"];

// bus status : waiting | riding | stop | error
$myObj->status = "riding";

$myJSON = json_encode($myObj);

echo $myJSON;
?>
