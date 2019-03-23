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
        $obj = new Child(
            $data['pk'],
            $data['name'],
            $data['firstname'],
            $data['birthdate'],
            $data['isvalide'],
            $data['validedate']
        );
        return $obj;
    }

}

?>
