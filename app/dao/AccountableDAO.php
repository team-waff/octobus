<?php
include('DAO.php');
include('../models/Accountable.php');

class AccountableDAO extends DAO{

    protected $table;

    public function __construct() {
        parent::__construct();
        $this->table = "accountable";
    }

    public function getById($id) {
        $data = $this->get($id);
        return $this->createObject($data);
    }

    public function getByIds($ids) {
        $accountables = array();

        foreach($ids as $id) {
            array_push($accountables, $this->getById($id));
        }
        return $accountables;
    }

    public function createObject($data){ 
        $childs = array();
        $obj = new Accountable(
            $data['pk'],
            $data['name'],
            $data['firstname'],
            $data['email'],
            $data['tel'],
            false
        );
        return $obj;
    }

}

?>
