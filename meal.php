<?php
require_once "classes/User.php";
// require_once "user_guard.php"; 
error_reporting(E_ALL);
session_start();

//print_r($_SESSION);
$id = $_SESSION['useronline'] ?? null;
if ($id === null) {
    // Redirect or handle the case where $id is not set
    exit("User not logged in"); // For example, exit with a message
}
$user = new User;
$data = $user->get_user_by_id($id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <title>Rayfit User Dashboard</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid">
        <?php require_once "partials/sidebar.php" ?>
        <div class="main">
            <?php require_once "partials/nav.php";?>

            <div class="row" style="padding: 30px; margin:10px;border-radius: 50px;">
                <div class="col shadow" id="meal">
                    <?php
                    if (isset($_SESSION['errormsg'])) {
                        echo "<div class='alert alert-danger'>" . $_SESSION['errormsg'] . " </div>";
                        unset($_SESSION['errormsg']);
                    }
                    ?>
                    <form action="action_meal.php" method="post">
                        <h1 style="color: #2a2185;">Track your meal with us today</h1>

                        <!-- Meal Type -->
                        <div class="mb-3">
                            <label for="mealType" class="form-label">Meal Type:</label>
                            <select id="mealType" name="mealType" class="form-select">
                                <option value="breakfast">Breakfast</option>
                                <option value="lunch">Lunch</option>
                                <option value="dinner">Dinner</option>
                                <option value="snack">Snack</option>
                                <!-- Add more meal types as needed -->
                            </select>
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label for="mealDescription" class="form-label">Description:</label>
                            <textarea id="mealDescription" name="mealDesc" rows="5" class="form-control"></textarea>
                        </div>
                        
                        <!-- Water -->
                        <div class="mb-3">
                            <label for="waterAmount" class="form-label">Amount (in ounces/ml):</label>
                            <input type="number" id="waterAmount" name="waterAmount" class="form-control">
                        </div>

                        <!-- Calories -->
                        <div class="mb-3">
                            <label for="calories" class="form-label">Calories:</label>
                            <input type="number" id="calories" name="calories" class="form-control">
                        </div>

                        <!-- Meal Quality -->
                        <div class="mb-3">
                            <label for="mealQuality" class="form-label">Meal Quality:</label>
                            <span id="mealQuality" name="mealQuality" class="form-control" style="border:none;"></span>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" name="meal_btn" class="btn" style="background-color: #2a2185; color: white;">Track Meal</button>

                    </form>
                </div>
            </div>

            <!-- =========== Scripts =========  -->
            <script src="assets/js/main.js"></script>
            <script src="assets/jquery.js"></script>
            <script>
                $(document).ready(function() {
                    $("#waterAmount, #calories").on('input', function() {
                        let waterAmount = parseInt($("#waterAmount").val());
                        let calories = parseInt($("#calories").val());

                        let mealType = $("#mealType").val();
                        let quality = "";

                        if (mealType === "breakfast") {
                            quality = waterAmount >= 12 && calories >= 300 ? "Good" : "Poor";
                        } else if (mealType === "lunch") {
                            quality = waterAmount >= 16 && calories >= 500 ? "Good" : "Poor";
                        } else if (mealType === "dinner") {
                            quality = waterAmount >= 20 && calories >= 600 ? "Good" : "Poor";
                        } else if (mealType === "snack") {
                            quality = waterAmount >= 8 && calories >= 150 ? "Good" : "Poor";
                        }

                        $("#mealQuality").text(quality);
                    });
                });
            </script>

            <!-- ====== ionicons ======= -->
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
