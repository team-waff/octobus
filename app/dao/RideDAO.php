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

    public function addRideChild($data){
        $query = "INSERT INTO ride_child (";
        foreach($data as $key => $value){
            if($value != " " && $key != "pk"){
                $query .= $key.',';
            }
        }
        $query = rtrim($query,',');
        $query .= ") VALUES (";
        foreach($data as $key => $value){
            if($value != " " && $key != "pk"){
                $query .= "'".$value."',";
            }
        }
        $query = rtrim($query,',');
        $query .= ")";
        $q = $this->db->prepare($query);
        $q->execute();
    }


}
