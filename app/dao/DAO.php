<?php

 class DAO {
  protected $pdo;
  public function __construct(){
        $this->pdo = new PDOConnect();
    }


    public function get($pk){
        $pk = (int)$pk;
        $q = $this->pdo->getDb()->query('SELECT * FROM '.$this->table.' as b WHERE b.pk ='.$pk);
        $data = $q->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getAll(){
        $q = $this->pdo->getDb()->query('SELECT * FROM '.$this->table);
        $data = $q->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getLastPk(){
        $q = $this->pdo->getDb()->query('SELECT b.pk AS pk FROM '.$this->table.' AS b ORDER BY b.pk DESC LIMIT 0,1');
        $data = $q->fetch(PDO::FETCH_ASSOC);
        if($data){
            return $data['pk'];
        }
        else{
            return 0;
        }
    }

    public function delete($pk){
        $query = "DELETE FROM ".$this->table." WHERE pk = ".$pk;
        $q = $this->pdo->getDb()->prepare($query);
        $q->execute();
        //var_dump($q);
    }

    public function trunc(){
        $query = "TRUNCATE TABLE ".$this->table;
        $q = $this->pdo->getDb()->prepare($query);
        $q->execute();
        //var_dump($q);
    }




 }

?>
