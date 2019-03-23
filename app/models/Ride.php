<?php
class Ride {
    var $id;
    var $name;
    var $start_time;
    var $start_date;

    public function __construct($id, $name, $start_time, $start_date) {
        $this->id = $id;
        $this->name = $name;
        $this->start_time = $start_time;
        $this->start_date = $start_date;

    }

    function __get($attr) {
        return $this->$attr;
    }
}
