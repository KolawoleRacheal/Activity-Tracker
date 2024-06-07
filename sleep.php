<?php
require_once "classes/User.php";
// require_once "user_guard.php"; 
error_reporting(E_ALL);
 session_start();

 //print_r($_SESSION);
$id = $_SESSION['useronline'];
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
        
            

            <div class="row">
                <div class="col-6 shadow" id="sleep"  style="justify-content: center;padding: 50px; margin:20px;border-radius: 50px;">
                <h1 style="color: #2a2185;">Sleep Data Form</h1>
                    <form method="post" action="action_sleep.php">
                       <div class="mb-3">
                            <label for="sleepTime">Sleep Time:</label>
                            <input type="time" id="sleepTime" name="sleepTime" class="form-control" required>
                       </div>
                        
                        <div class="mb-3">
                            <label for="sleepDuration">Sleep Duration (in hours):</label>
                            <input type="number" id="sleepDuration" name="sleepDuration" class="form-control"  min="0" step="0.01" required><br><br>
                        </div>
                        
                        <div class="mb-3">
                            <label for="sleepQuality">Sleep Quality :</label>
                            <input type="text" id="sleepQuality" readonly name="sleepQuality" class="form-control"  min="1" max="10" ><br><br>
                        </div>
                        
                        <button type="submit" name="sleep_btn" class="btn" style="background-color:  #2a2185;color:white;">Track sleep</button>
                    </form>
                </div>
            </div>
            
        
            
        </div>


        <!--1-->
   <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>
    <script src="assets/jquery.js"></script>
   
    <script>
        $("#sleepDuration").change(function() {
        let duration = parseInt($("#sleepDuration").val());


        let quality = duration >= 5 ? "Good" : "Poor";
        $("#sleepQuality").val(quality);


    });

    </script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>