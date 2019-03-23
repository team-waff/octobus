<?php

class RideDAO {
    public function __construct() {}

    public function getByIds($ids) {
        $rides = array();
        foreach($ids as $id) {
            array_push($rides, $this->get($id));
        }
        return $rides;
    }

    public function getAll() {
        return $this->getByIds([1,2,3,4]);
    }

    public function getById($id) {
        return $this->get($id);
    }

    public function get($id) {
        $name = 'Octobus - Ride';
        $start_time = date("H:i:s");
        $start_date = date('Y.m.d');
        return new Ride($id, $name, $start_time, $start_date);
    }
}
