<?php
class RideDAO extends DAO{

    protected $table;

    public function __construct() {
        parent::__construct();
        $this->table = "ride";
    }

    public function getById($id, $params=false) {
        $data = $this->get($id);
        return $this->createObject($data);
    }

    public function getByIds($ids) {
        $rides = array();
        foreach($ids as $id) {
            array_push($rides, $this->getById($id));
        }
        return $rides;
    }

    public function createObject($data){
        $courseDAO = new CourseDAO(false);
        $course = $courseDAO->getById($data['fk_course'], false);
        $obj = new Ride(
            $data['pk'],
            $course,
            $data['status'],
            $data['start_time'],
            $data['moment']
        );
        return $obj;
    }

}
