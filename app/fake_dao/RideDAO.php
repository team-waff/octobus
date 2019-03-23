<?php
/*
- routes :
app/ride/:id/status => get le status de la ride :id =====> slow polling
app/track/:track_id => get le dernier timestamp et pos de cette ride =====> hard polling
app/track/:track_id?log=true => get tout les timestamp et pos de cette ride ====> start polling late

*/
class RideDAO {
    public function __construct() {

    }
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

    public function getById($pk, $params=false) {
        return $this->get($pk);
    }

    public function get($pk) {
        $name = 'Octobus - Ride';
        $start_time = date("H:i:s");
        $start_date = date('Y.m.d');
        return new Ride($pk, 0, 'start', $start_time, $start_time);
    }
}
