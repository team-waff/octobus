<?php

include_once("DAO.php");

class ChildDAO extends DAO{

    protected $table;

    public function __construct()
    {
        parent::__construct();
        $this->table = "child";
    }

    public function getIsValide($pk){
        $pk = (int)$pk;
        $q = $this->pdo->getDb()->query('SELECT * FROM '.$this->table.' as b WHERE b.pk ='.$pk.' AND b.isvalide IS TRUE');
        $data = $q->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

}

$test = new ChildDAO();


$result = $test->getIsValide(2);

var_dump($result);



?>