<?php

class ChildDAO extends DAO{

    protected $table;

    public function __construct() {
        parent::__construct();
        $this->table = "child";
    }

    public function getById($id, $flag=true) {
        if(!$flag){
            $data = $this->get($id['fk_child']);
        } else {
            if(!is_bool($flag)) {
                $flag = true;
            }
            $data = $this->get($id);
        }
        return $this->createObject($data, $flag);
    }

    public function getByIds($ids,$flag=true) {
        $data = array();

        foreach($ids as $id) {
            array_push($data, $this->getById($id,$flag));
        }
        return $data;
    }

    public function createObject($data,$flag=true){

        $rides=null;
        if($flag){
            $rideDAO = new RideDAO();
            $rides = $rideDAO->getByIds($this->getChildsRide($data['pk']));
        }
        $obj = new Child(
            $data['pk'],
            $data['name'],
            $data['firstname'],
            $data['birthdate'],
            $data['isvalide'],
            $data['validedate'],
            $data['avatar'],
            $rides
        );
        return $obj;
    }

    private function getChildsRide($pk){
        $pk = (int)$pk;
        $q = $this->pdo->getDb()->query('SELECT fk_ride FROM ride_child as b WHERE b.fk_child ='.$pk);
        $data = $q->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}
