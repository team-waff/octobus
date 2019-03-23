<?php
class Track {
    var $pk;
    var $latitude;
    var $longitude;
    var $ts;
    var $fk_ride;

    public function __construct($pk, $latitude, $ts, $longitude, $fk_ride) {
        $this->pk = $pk;
        $this->latitude = $latitude;
        $this->ts = $ts;
        $this->longitude = $longitude;
        $this->fk_ride = $fk_ride;
    }

    function __get($attr) {
        return $this->$attr;
    }
}
