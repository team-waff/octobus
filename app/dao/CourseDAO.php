<?php


class CourseDAO extends DAO{

    protected $table;

    public function __construct() {
        parent::__construct();
        $this->table = "course";
    }

    public function getById($id) {
        $data = $this->get($id);
        return $this->createObject($data);
    }

    public function getByIds($ids) {
        $courses = array();

        foreach($ids as $id) {
            array_push($courses, $this->getById($id));
        }
        return $courses;
    }

    public function createObject($data){
        $obj = new Course(
            $data['pk'],
            $data['start_pos_lat'],
            $data['start_pos_long'],
            $data['end_pos_lat'],
            $data['end_pos_long'],
            $data['name']
        );
        return $obj;
    }

    private function getChildsParent($pk){
        $pk = (int)$pk;
        $q = $this->pdo->getDb()->query('SELECT fk_child FROM accountable_child as b WHERE b.fk_parent ='.$pk);
        $data = $q->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

}

