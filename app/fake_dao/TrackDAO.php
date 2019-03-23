<?php

class TrackDAO {

    public function __construct() {
        $this->POINTS = [
            ['lat'=> 40.5, 'lng'=>42.5],
            ['lat'=> 40.2, 'lng'=>42.1],
            ['lat'=> 40.2, 'lng'=>42.1],
            ['lat'=> 40.2, 'lng'=>42.1],
            ['lat'=> 40.2, 'lng'=>42.1],
            ['lat'=> 40.2, 'lng'=>42.1]
        ];
    }

    public function getAll() {
        echo 'in get all track dao';
    }

    private function getLastPos($point_id) {

        return $this->POINTS[$point_id];
    }

    public function getById($id, $params=false) {
        if(isset($params['point'])) {
            return $this->getLastPos((int)$params['point']);
        } else {
            return $this->POINTS;
        }
    }
}
