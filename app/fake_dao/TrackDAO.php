<?php

class TrackDAO {
    public function __construct() {
        $this->lat = 50.4;
        $this->lng = 4.67;
    }

    public function getAll() {
        echo 'in get all track dao';
    }

    private function getHistory() {
        return [['lat'=> 20.4, 'lng' => 4.67], ['lat'=> 20.4, 'lng' => 4.67], ['lat'=> 20.4, 'lng' => 4.67]];
    }

    private function getLastPos() {
        return $this->generateFakePos();
    }

    private function generateFakePos() {
        $this->lat = $this->lat + 0.1;
        $this->lng = $this->lng + 0.1;
        return ['lat'=> $this->lat, 'lng' => $this->lng];
    }


    public function getById($id, $params=false) {

        if($params['log']) {
            return $this->getHistory();
        }
        return $this->getLastPos();

    }
}
