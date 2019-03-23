<?php
class Child {
    var $id;
    var $name;
    var $firstname;
    public function __construct($id, $name, $firstname) {
        $this->id = $id;
        $this->name = $name;
        $this->firstname = $firstname;
    }

    function __get($attr) {
        return $this->$attr;
    }
}
