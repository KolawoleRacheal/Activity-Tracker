<?php
session_start();
error_reporting(E_ALL);

require_once "classes/sanitizer.php";
require_once "classes/Exercise.php";
require_once "classes/User.php";

$exe = new Exercise;
$user = new User;

// Check if the form is submitted
if (isset($_POST['act_btn'])) {
    $exercise_userid = $_SESSION['useronline'] ?? null;
    
    if (!$exercise_userid) {
        $_SESSION['errormsg'] = "User is not logged in.";
        header("location:dashboard.php");
        exit();
    }

    $exercise_duration = sanitizer($_POST["duration"]);
    $exercise_type = sanitizer($_POST["activityType"]);
    $exercise_distance = sanitizer($_POST["distance"]);
    $exercise_intlevel = sanitizer($_POST["intensityLevel"]);

    // Check if user has set goals
    $result = $user->check_goals($exercise_userid);

    if ($result == 0) {
        $_SESSION['errormsg'] = "You need to add a goal before you can track your exercise.";
        header("location:dashboard.php");
        exit();
    }

    // Insert activity
    $exercise = $exe->insert_activity($exercise_userid, $exercise_duration, $exercise_type, $exercise_distance, $exercise_intlevel);

    if ($exercise) {
        $_SESSION['feedback'] = "Exercise tracked successfully.";
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
?>
