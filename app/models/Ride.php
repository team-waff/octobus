<?php
class Ride {
    var $pk;
    var $course;
    var $start_time;
    var $status;
    var $moment;

    public function __construct($pk, $course, $status, $start_time, $moment) {
        $status_transform = ['0'=>'start', '1'=>'running', '2'=>'stop'];
        $this->pk = $pk;
        $this->course = $course;
        $this->status = $status_transform[$status];
        $this->start_time = $start_time;
        $this->moment = $moment;
    }

    function __get($attr) {
        return $this->$attr;
    }
}
