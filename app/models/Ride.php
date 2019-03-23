<?php
class Ride {
    var $pk;
    var $course;
    var $start_time;
    var $status;
    var $moment;

    public function __construct($pk, $course, $status, $start_time, $moment) {
        $this->pk = $pk;
        $this->course = $course;
        $this->status = $status;
        $this->start_time = $start_time;
        $this->moment = $moment;
    }

    function __get($attr) {
        return $this->$attr;
    }
}
