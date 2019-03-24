<?php


class CourseDAO extends DAO{

    protected $table;

    public function __construct($flag=true) {
        parent::__construct();
        $this->flag = $flag;
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
        $points = null;
        if ($this->flag == true) {
            $pointDAO = new PointDAO();
            $points = $pointDAO->getAllByFkCourse($data['pk']);
        }
        $obj = new Course(
            $data['pk'],
            $points,
            $data['name']
        );
        return $obj;
    }

}
