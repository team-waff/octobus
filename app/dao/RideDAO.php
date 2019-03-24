<?php
class RideDAO extends DAO{

    protected $table;

    public function __construct() {
        parent::__construct();
        $this->table = "ride";
    }

    public function getAll() {
        $data = parent::getAll();
        $rides = array();
        foreach($data as $d) {
            array_push($rides,$this->createObject($d));
        }
        return $rides;
    }

    public function getById($id, $params=false) {
        if(isset($id['fk_ride'])) {
            $data = $this->get($id['fk_ride']);
        } else {
            $data = $this->get($id);
        }

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
        $course = $courseDAO->getById($data['fk_course']);
        $obj = new Ride(
            $data['pk'],
            $course,
            $data['status'],
            $data['start_time'],
            $data['moment']
        );
        return $obj;
    }

    public function add($params = false) {
        $formatted = ['fk_child'=>$params['child'],'fk_ride'=>$params['ride']];

        return $this->addRideChild($formatted);
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

        $q = $this->pdo->getDb()->prepare($query);
        $q->execute();

        return 'success';
    }


}
