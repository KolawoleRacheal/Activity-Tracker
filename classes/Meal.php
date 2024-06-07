<?php
error_reporting(E_ALL);
require_once "Db.php";

class Meal extends Db
{
    private $dbconn;

    public function __construct()
    {
        $this->dbconn = $this->connect();
    }

    public function insert_activity($meal_userid,$mealType,$mealDesc,$water_amount,$calories,$mealQuality)
    {
        $sql = "INSERT INTO meal (mealuser_id,meal_type,meal_desc,water_amount,calories,meal_quality) VALUES (?,?,?,?,?,?)";
        $stmt = $this->dbconn->prepare($sql);
        $result = $stmt->execute([$meal_userid,$mealType,$mealDesc,$water_amount,$calories,$mealQuality]);
        return $result;
    }
}

;