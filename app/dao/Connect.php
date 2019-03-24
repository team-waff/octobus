<?php
  class PDOConnect {
    protected $db;

    public function __construct(){
            $dsn = 'mysql:host=localhost;dbname=octobus';
            $usernameDB = 'root';
            $passwordDB = 'root';
            $options = array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            );
            try {
                $db = new PDO($dsn, $usernameDB, $passwordDB, $options);
            } catch (PDOException $e) {
                return $e;
            }
            $this->db = $db;
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

    public function getDb(){
      return $this->db;
    }

  }

?>
