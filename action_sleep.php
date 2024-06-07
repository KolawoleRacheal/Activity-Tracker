<?php
session_start();
error_reporting(E_ALL);

require_once "classes/sanitizer.php";
require_once "classes/Sleep.php";
require_once  "classes/User.php";

$sleep1 = new Sleep;
$user=new User;
$id=$_SESSION['useronline'];

if (isset($_POST['sleep_btn'])) {
   $sleep_userid = $_SESSION['useronline'];
    $sleep_time = sanitizer($_POST["sleepTime"]);
    $sleep_duration = sanitizer($_POST["sleepDuration"]);
    $sleep_quality = sanitizer($_POST["sleepQuality"]);

    $result=$user->check_goals($id);


    if($result==0){
       $_SESSION['errormsg']="You need to add a goal before can track your sleep";
       header("location:dashboard.php");
       exit();
   
    }

    $sleep = $sleep1->insert_activity($sleep_time, $sleep_duration, $sleep_quality, $sleep_userid);

    if ($sleep) {
        $_SESSION['feedback'] = "Successful";
        header("location:dashboard.php");
        exit();
    } else {
        $_SESSION['errormsg'] = "Something went wrong. Please try again.";
        header("location:dashboard.php");
        exit();
    }
} else {
    $_SESSION['errormsg'] = "You have to complete the form.";
    header("location:dashboard.php");
    exit();
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script>
        $("#sleepDuration").change(function() {
            let duration = parseInt($("#sleepDuration").val());


            let quality = duration >= 5 ? "Good" : "Poor";
            $("#sleepQuality").val(quality);
        });
        $("#sleepDuration").change(function() {
            let duration = parseInt($("#sleepDuration").val());


            let quality = duration >= 5 ? "Good" : "Poor";
            $("#sleepQuality").val(quality);
        });
    </script>
</body>
</html>