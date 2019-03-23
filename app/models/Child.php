<?php
class Child {
    var $pk;
    var $name;
    var $firstname;
    var $birthdate;
    var $isvalide;
    var $validedate;
    public function __construct($pk, $name, $firstname,$birthdate, $isvalide, $validedate) {
        $this->pk = $pk;
        $this->name = $name;
        $this->firstname = $firstname;
        $this->birthdate = $birthdate;
        $this->isvalide = $isvalide;
        $this->validedate = $validedate;
    }

    function __get($attr) {
        return $this->$attr;
    }
}
