<?php
include('DAO.php');
include('../models/Accountable.php');
include('ChildDAO.php');

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
        $childDAO = new ChildDAO();
        $childs = $childDAO->getByIds($this->getChildsParent($data['pk']));
/*
Fonction qui recup la liste des fk child en fonction du fk du parent

*/

        $obj = new Accountable(
            $data['pk'],
            $data['name'],
            $data['firstname'],
            $data['email'],
            $data['tel'],
            $childs
        );
        return $obj;
    }

    private function getChildsParent($pk){
        $pk = (int)$pk;
        $q = $this->pdo->getDb()->query('SELECT fk_child FROM accountable_child as b WHERE b.fk_parent ='.$pk);
        $data = $q->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

}

$test = new AccountableDAO();

$result = $test->getById(4);

var_dump($result);

?>
