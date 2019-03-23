<?php
class AccountableDAO {
    public function __construct() {
        $this->_names = ['Dupont', 'Smith', 'Tielemans'];
        $this->_firstnames = ['Albert', 'Jean-Mi', 'Richard'];
        $this->_emails = ['Albert@google.com', 'Jean-Mi@google.com', 'Richard'];
        $this->_tels = ['+321010101', '+321010101', '+321010101'];
    }

    public function getById($id) {
        return $this->get($id);
    }

    public function get($id) {
        $name = $this->_names[$id-1];
        $firstname = $this->_firstnames[$id-1];
        $email = $this->_emails[$id-1];
        $tel = $this->_tels[$id-1];
        $childs = new ChildDAO();

        return new Accountable($id, $name, $firstname, $email , $tel, $childs->getByIds([1, 2]));

    }
}
