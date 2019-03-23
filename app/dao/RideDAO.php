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
        $coursedDAO = new CourseDAO();
        $course = $coursedDAO->getById($data['fk_course']);
        var_dump('COUUUURSE', $course);
        $obj = new Ride(
            $data['pk'],
            $data['fk_course'],
            $data['start_time'],
            $data['moment'],
            $data['status'],
            $course
        );
        return $obj;
    }

}
