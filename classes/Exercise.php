<?php
error_reporting(E_ALL);
require_once "Db.php";

class Exercise extends Db
{
    private $dbconn;

    public function __construct()
    {
        $this->dbconn = $this->connect();
    }

    public function insert_activity($exercise_userid,$exercise_duration,$exercise_type,$exercise_distance,$exercise_intlevel)
    {
        $sql = "INSERT INTO exercise (exercise_userid,exercise_duration, exercise_type,exercise_distance,exercise_intlevel) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->dbconn->prepare($sql);
        $result = $stmt->execute([$exercise_userid,$exercise_duration,$exercise_type,$exercise_distance,$exercise_intlevel]);
        return $result;
    }
}

$exe = new exercise;