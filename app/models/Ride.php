<?php
class Ride {
    var $pk;
    var $fk_course;
    var $start_time;
    var $status;
    var $moment;

    public function __construct($pk, $fk_course, $status, $start_time, $moment) {
        $this->pk = $pk;
        $this->fk_course = $fk_course;
        $this->status = $status;
        $this->start_time = $start_time;
        $this->moment = $moment;
    }

    function __get($attr) {
        return $this->$attr;
    }
}
