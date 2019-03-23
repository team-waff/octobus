<?php
class Course {
    var $pk;
    var $start_pos;
    var $end_pos;
    var $points;
    var $name;

    function __construct($pk, $points, $name) {
        $this->pk = $pk;
        $this->start_pos = ['lat'=>$points[0]->latitude, 'lng'=>$points[0]->longitude];
        $this->end_pos = ['lat'=>$points[count($points)-1]->latitude, 'lng'=>$points[count($points)-1]->longitude];
        $this->points = $points;
        $this->name = $name;
    }

    function __get($attr) {
        return $this->$attr;
    }

    function __set($attr, $value) {

    }
}
