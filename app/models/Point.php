<?php

class Point {
    var $pk;
    var $lat;
    var $lng;
    public function __construct($pk, $lat, $lng) {
        $this->pk = $pk;
        $this->lat = $lat;
        $this->lng = $lng;
    }
}
