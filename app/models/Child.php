<?php
class Child {
    var $pk;
    var $name;
    var $firstname;
    var $birthdate;
    var $isvalide;
    var $validedate;
    var $avatar;
    var $rides;
    public function __construct($pk, $name, $firstname,$birthdate, $isvalide, $validedate, $avatar, $rides) {
        $this->pk = $pk;
        $this->name = $name;
        $this->firstname = $firstname;
        $this->birthdate = $birthdate;
        $this->isvalide = $isvalide;
        $this->validedate = $validedate;
        $this->avatar = $avatar;
        $this->rides = $rides;
    }

    function __get($attr) {
        return $this->$attr;
    }
}
