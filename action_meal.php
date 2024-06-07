<?php
session_start();
error_reporting(E_ALL);

require_once "classes/sanitizer.php";
require_once "classes/Meal.php";
require_once "classes/User.php";

$meal1 = new Meal;
$user = new User;

// Check if the form is submitted
if (isset($_POST['meal_btn'])) {
    $meal_userid = $_SESSION['useronline'] ?? null;
    
    if (!$meal_userid) {
        $_SESSION['errormsg'] = "User is not logged in.";
        header("location:dashboard.php");
        exit();
    }

    $mealType = sanitizer($_POST["mealType"]);
    $mealDesc = sanitizer($_POST["mealDesc"]);
    $water_amount = sanitizer($_POST["waterAmount"]);
    $calories = sanitizer($_POST["calories"]);
    $mealQuality = sanitizer($_POST["mealQuality"]);

    // Check if user has set goals
    $result = $user->check_goals($meal_userid);

    if ($result == 0) {
        $_SESSION['errormsg'] = "You need to add a goal before you can track your meal.";
        header("location:dashboard.php");
        exit();
    }
    if(empty($mealType) || empty($mealDesc) || empty($water_amount)|| empty($calories)){
        $_SESSION['errormsg']="All fields are required";
        header("location:../dashboard.php");
        exit();
    }

    // Insert meal activity
    $meal = $meal1->insert_activity($meal_userid, $mealType, $mealDesc, $water_amount, $calories,$mealQuality);

    if ($meal) {
        $_SESSION['feedback'] = "Meal tracked successfully.";
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
