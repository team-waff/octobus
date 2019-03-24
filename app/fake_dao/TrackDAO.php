<?php

class TrackDAO {

    public function __construct() {
        $this->POINTS = [
            ['lat'=> 40.5, 'lng'=>44.5],
            ['lat'=> 40.7, 'lng'=>46.1],
            ['lat'=> 41.2, 'lng'=>48.1],
            ['lat'=> 42.2, 'lng'=>50.1],
            ['lat'=> 43.2, 'lng'=>51.1],
            ['lat'=> 44.2, 'lng'=>53.1]
        ];
    }

    public function getAll() {
        return false;
    }

    private function getLastPos($point_id) {
        if($point_id >= count($this->POINTS)) {
            return [status=>'finished'];
        }
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
