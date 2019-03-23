<?php

class Point {
    var $pk;
    var $lat;
    var $lng;
    public function __construct($pk, $latitude, $longitude) {
        $this->pk = $pk;
        $this->lat = $latitude;
        $this->lng = $longitude;
    }
}
