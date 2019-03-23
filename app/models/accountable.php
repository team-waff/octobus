<?php
class Accountable {
    var $pk;
    var $name;
    var $firstname;
    var $email;
    var $tel;

    function __construct($pk, $name, $firstname, $email, $tel) {
        $this->pk = $pk;
        $this->name = $name;
        $this->firstname = $firstname;
        $this->email = $email;
        $this->tel = $tel;
    }

    function __get($attr) {
        return $this->$attr;
    }

    function __set($attr, $value) {

    }
}
