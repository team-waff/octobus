<?php

class ChildDAO extends DAO{

    protected $table;

    public function __construct() {
        parent::__construct();
        $this->table = "child";
    }

    public function getById($id,$flag=true) {
        if(!$flag){
            $data = $this->get($id['fk_child']);
        }else{
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
            //TODO : Get les courses depuis les fk courses lié à l'enfant
            $rides = new RideDAO()->getByIds();
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
}
