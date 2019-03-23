<?php

class ChildDAO {
    public function __construct() {
        $this->_names = ['Dupont', 'Smith', 'Tielemans', 'Jordans'];
        $this->_firstnames = ['Kilian', 'Marie', 'Jean', 'Benoit'];
    }

    public function getByIds($ids) {
        $childs = array();

        foreach($ids as $id) {
            array_push($childs, $this->get($id));
        }
        return $childs;
    }

    public function getAll() {
        return $this->getByIds([1,2,3,4]);
    }

    public function getById($id) {
        return $this->get($id);
    }

    public function get($id) {
        $name = $this->_names[$id-1];
        $firstname = $this->_firstnames[$id-1];
        return new Child($id, $name, $firstname, 0, 0, 0);
    }
}
