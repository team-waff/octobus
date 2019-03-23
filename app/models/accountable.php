<?php
class Accountable {
    var $pk;
    var $name;
    var $firstname;
    var $email;
    var $tel;
    var $childs;
    function __construct($pk, $name, $firstname, $email, $tel, $childs) {
        $this->pk = $pk;
        $this->name = $name;
        $this->firstname = $firstname;
        $this->email = $email;
        $this->tel = $tel;
        $this->childs = $childs;
    }

    function __get($attr) {
        return $this->$attr;
    }

    function __set($attr, $value) {

    }
}
