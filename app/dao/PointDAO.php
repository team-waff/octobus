<?php
class PointDAO extends DAO{

    protected $table;

    public function __construct() {
        parent::__construct();
        $this->table = "point";
    }

    public function getAllByFkCourse($fk_course) {
        $fk_course = (int)$fk_course;
        $q = $this->pdo->getDb()->query('SELECT * FROM '.$this->table.' as b WHERE b.fk_course ='.$fk_course);
        $data = $q->fetchAll(PDO::FETCH_ASSOC);
        $renderedPoints = array();
        foreach($data as $d) {
            array_push($renderedPoints, $this->createObject($d));
        }
        return $renderedPoints;
    }

    public function getById($id) {
        $data = $this->get($id);
        return $this->createObject($data);
    }

    public function getByIds($ids) {
        $points = array();

        foreach($ids as $id) {
            array_push($points, $this->getById($id));
        }
        return $points;
    }

    public function createObject($data){
        $obj = new Point(
            $data['pk'],
            $data['longitude'],
            $data['latitude']
        );
        return $obj;
    }

}
