<?php

include_once("DAO.php");

class AccountableDAO extends DAO{

    protected $table;

    public function __construct()
    {
        parent::__construct();
        $this->table = "accountable";
    }

}




/*$test = new AccountableDAO();


$result = $test->get(1);

var_dump($result);*/


?>
