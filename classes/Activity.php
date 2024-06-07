<?php
    error_reporting(E_ALL);
    require_once "Db.php";
    class Activity extends Db{

        private $dbconn;
        public function __construct(){
            $this->dbconn = $this->connect();
        }

        public function fetch_all_meal(){
            $sql="SELECT * FROM meal JOIN users ON users.user_id=meal.mealuser_id";
            $stmt=$this->dbconn->prepare($sql);
            $stmt->execute();
            $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }


        public function fetch_all_sleep(){
            $sql="SELECT * FROM sleep JOIN users ON users.user_id=sleep.sleepuser_id";
            $stmt=$this->dbconn->prepare($sql);
            $stmt->execute();
            $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }


        public function fetch_all_exercise(){
            $sql="SELECT * FROM exercise JOIN users ON users.user_id=exercise.exercise_userid";
            $stmt=$this->dbconn->prepare($sql);
            $stmt->execute();
            $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }


    }













?>