<?php
require_once "classes/User.php";
error_reporting(E_ALL);
session_start();

// Ensure $id has a value to avoid errors
$id = $_SESSION['useronline'] ?? null;
if ($id === null) {
    exit("User not logged in");
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
    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 50%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <?php require_once "partials/sidebar.php"; ?>

        <div class="main">
            <?php require_once "partials/nav.php"; ?>

            <div class="cardHeader" style="padding:30px;">
                <h2 style="text-align:center;">My Progress</h2>
            </div>
            <div class="row">
                <div class="col-lg-9 p-5">
                    <?php
                    if (isset($_SESSION['errormsg'])) {
                        echo "<div class='alert alert-danger'>" . $_SESSION['errormsg'] . " </div>";
                        unset($_SESSION['errormsg']);
                    }
                    if(isset($_SESSION['feedback'])){
                        print "<p class='alert alert-success p-3'>".$_SESSION['feedback']."</p>";
                        unset($_SESSION['feedback']);
                     }
                  
                    ?>
                    <form action="process/process_goals.php" id="form" method="post">
                        <h2>Set Your Activity Goals</h2>

                        <!-- Activity Type -->
                        <div class="mb-3">
                            <label for="cat" class="form-label">Category</label>
                            <select id="cat" name="cat" class="form-select" required>
                                <option value="">Please select</option>
                                <option value="exercise">Exercise time</option>
                                <option value="sleep">Sleep time</option>
                                <option value="meal">Meal time</option>
                            </select>
                        </div>

                        <!-- Duration -->
                        <div class="mb-3">
                            <label for="frequency" class="form-label">Unit:</label>
                            <input type="text" id="frequency" name="frequency" class="form-control" disabled>
                        </div>

                        <!-- Submit Button -->
                        <input type="submit" id="goal_btn" name="set_goals" class="btn btn-primary" value="Set Goals">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- =========== Scripts ========= -->
    <script src="assets/jquery.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        $("#cat").change(function() {
            let category = $("#cat").val();
            let placeholder;

            if (category === "sleep") {
                placeholder = "Hours";
            } else if (category === "meal") {
                placeholder = "Calories";
            } else {
                placeholder = "Minutes";
            }

            $("#frequency").attr("placeholder", placeholder);
        });
    </script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
