<?php
error_reporting(E_ALL);
require_once "Db.php";

class Sleep extends Db
{
    private $dbconn;

    public function __construct()
    {
        $this->dbconn = $this->connect();
    }

    public function insert_activity($sleep_time, $sleep_duration, $sleep_quality, $sleepuser_id)
    {
        $sql = "INSERT INTO sleep (sleep_time, sleep_duration, sleep_quality, sleepuser_id) VALUES (?, ?, ?, ?)";
        $stmt = $this->dbconn->prepare($sql);
        $result = $stmt->execute([$sleep_time, $sleep_duration, $sleep_quality, $sleepuser_id]);
        return $result;
    }


    
}

$new = new Sleep;