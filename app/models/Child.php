<?php
class Child {
    var $pk;
    var $name;
    var $firstname;
    var $birthdate;
    var $isvalide;
    var $validedate;
    var $avatar;
    public function __construct($pk, $name, $firstname,$birthdate, $isvalide, $validedate, $avatar) {
        $this->pk = $pk;
        $this->name = $name;
        $this->firstname = $firstname;
        $this->birthdate = $birthdate;
        $this->isvalide = $isvalide;
        $this->validedate = $validedate;
        $this->avatar = $avatar;
    }

    function __get($attr) {
        return $this->$attr;
    }
}
