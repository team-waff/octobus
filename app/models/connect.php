<?php
  class PDOConnect {
    private $login;
    private $pass;
    private $connec;

    public function __construct($db, $login ='root', $pass=''){
      $this->login = $login;
      $this->pass = $pass;
      $this->db = $db;
      $this->connection();
    }

    private function connection(){
      try
      {
        $bdd = new PDO('mysql:host=localhost;dbname='.$this->db, $this->login, $this->pass);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        $this->connec = $bdd;
      }
      catch (PDOException $e)
      {
        $msg = 'ERROR PDO in ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
        die($msg);
      }
    }
  }

  $r = new PDOConnect('octobus');

  var_dump($r);
?>