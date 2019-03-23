<?php
class Course {
    var $pk;
    var $start_pos_lat;
    var $start_pos_long;
    var $end_pos_lat;
    var $end_pos_long;
    var $name;
    function __construct($pk, $start_pos_lat, $start_pos_long, $end_pos_lat, $end_pos_long, $name) {
        $this->pk = $pk;
        $this->start_pos_lat = $start_pos_lat;
        $this->start_pos_long = $start_pos_long;
        $this->end_pos_lat = $end_pos_lat;
        $this->end_pos_long = $end_pos_long;
        $this->name = $name;
    }

    function __get($attr) {
        return $this->$attr;
    }

    function __set($attr, $value) {

    }
}
