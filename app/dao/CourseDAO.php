<?php


class CourseDAO extends DAO{

    protected $table;

    public function __construct() {
        parent::__construct();
        $this->table = "course";
    }

<<<<<<< HEAD
    public function getById($id, $params=false) {
        var_dump('hey',$id);
        $data = $this->get($id);
        var_dump('ho', $data);
=======
    public function getById($id) {
        $data = $this->get($id);
>>>>>>> 7f531b3f3a6195265d3f954184597eace8018b53
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

}
