<?php
class Course {
    var $pk;
    var $start_pos;
    var $end_pos;
    var $name;
    function __construct($pk, $start_pos_lat, $start_pos_long, $end_pos_lat, $end_pos_long, $name) {
        $this->pk = $pk;
        $this->start_pos = ['lat'=>$start_pos_lat, 'lng'=>$start_pos_long];
        $this->end_pos = ['lat'=>$end_pos_lat, 'lng'=>$end_pos_long];
        $this->name = $name;
    }

    function __get($attr) {
        return $this->$attr;
    }

    function __set($attr, $value) {

    }
}
