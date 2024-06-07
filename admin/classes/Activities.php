<?php
error_reporting(E_ALL);
    require_once "Db.php";

    class Activities extends Db{
        private $dbconn;

        public function __construct(){
            $this->dbconn = $this->connect();
        }
        public function fetch_users(){
            $sql = "SELECT * FROM users";
            $stmt = $this->dbconn->prepare($sql);
            $stmt->execute();
            $record = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $record;
        }


    
    }






?>