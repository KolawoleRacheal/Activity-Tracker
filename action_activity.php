<?php
require_once "index.php";
require_once "classes/sanitizer.php";
    require_once "classes/Activity.php";
    error_reporting(E_ALL);
    $act1 = new Activity;

    if(isset($_POST['btn_sub'])){
        $date = sanitizer($_POST['date']);
        $time = sanitizer($_POST['time']);
        $mealType= sanitizer($_POST['mealType']);
        $description= sanitizer($_POST['description']);
        $calories = sanitizer($_POST['calories']);
        $activityType = sanitizer($_POST['activityType']);  
        $distance = sanitizer($_POST['distance']);
        $intensityLevel = sanitizer($_POST['intensityLevel']);
        $duration = sanitizer($_POST['duration']);
        $sleepQuality = sanitizer($_POST['sleepQuality']);
        

    
        if(empty($date) || empty($time) || empty($mealType) || empty($description) || empty($calories) || empty
        ($activityType) || empty($distance) || empty($intensityLevel) || empty($duration) || empty($sleepQuality)){
            $_SESSION['errormsg'] = "All fields are required";
            header("location:index.php");
        }else{
            $chk = $act1->insert_activities($date,$time,$mealType,$description,$calories,
            $activityType,$distance,$intensityLevel,$duration,$sleepQuality);
        }
            
    }else{
        $_SESSION['errormsg'] = "Please complete the form";
        header("location:index.php");
        exit();
    }


















?>