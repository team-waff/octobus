<?php
class Course {
    var $pk;
    var $start_pos;
    var $end_pos;
    var $points;
    var $name;

    function __construct($pk, $points, $name) {
        $this->pk = $pk;
        if($points) {
            $this->start_pos = ['lat'=>$points[0]->lat, 'lng'=>$points[0]->lng];
            $this->end_pos = ['lat'=>$points[count($points)-1]->lat, 'lng'=>$points[count($points)-1]->lng];
        } else {
            $this->start_pos = null;
            $this->end_pos = null;
        }
        
        $this->points = $points;
        $this->name = $name;
    }

    function __get($attr) {
        return $this->$attr;
    }

    function __set($attr, $value) {

    }
}
