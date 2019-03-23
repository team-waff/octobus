<?php

class ChildDAO extends DAO{

    protected $table;

    public function __construct() {
        parent::__construct();
        $this->table = "child";
    }

    public function getById($id) {
        $data = $this->get($id['fk_child']);
        return $this->createObject($data);
    }

    public function getByIds($ids) {
        $data = array();

        foreach($ids as $id) {
            array_push($data, $this->getById($id));
        }
        return $data;
    }

    public function createObject($data){
        $childs = array();
        $rides = $this->fakeRideGen();

        $obj = new Child(
            $data['pk'],
            $data['name'],
            $data['firstname'],
            $data['birthdate'],
            $data['isvalide'],
            $data['validedate'],
            $rides
        );
        return $obj;
    }

    private function fakeRideGen() {
        $obj = new StdClass();
        $obj->id = 1;
        $obj->start_coords =['lat' => 50.4, 'lng' => 50.4];
        $obj->end_coords =['lat' => 51.4, 'lng' => 51.4];

        $obj2->id = 2;
        $obj2 = new StdClass();
        $obj2->start_coords =['lat' => 50.4, 'lng' => 50.4];
        $obj2->end_coords =['lat' => 51.4, 'lng' => 51.4];
        return [$obj, $obj2];
    }

}

?>
