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
           
        <?php require_once "partials/nav.php"; ?>
        
            

        <div class="row mt-7" style="justify-content: center;padding: 30px; margin:30px;border-radius: 80px;">
                <div class="col shadow" id="gym">
                        <?php
                         if(isset($_SESSION['errormsg'])){
                            print "<p class='alert alert-danger p-3'>".$_SESSION['errormsg']."</p>";
                            unset($_SESSION['errormsg']);
                         }
                         
                        
                        ?>
                    <form action="action_exercise.php" method="post">
                        <h1 style="color: #2a2185;">Track your Fitness here with us</h1>
                        <!-- Activity Type -->
                        <div class="mb-3">
                          <label for="activityType" class="form-label">Activity Type:</label>
                          <select id="activityType" name="activityType" class="form-select">
                                <option value=""></option>
                                <option value="running">Running</option>
                                <option value="cycling">Cycling</option>
                                <option value="swimming">Swimming</option>
                                <option value="yoga">Yoga</option>
                                <option value="weightlifting">Weightlifting</option>
                                <option value="aerobics">Aerobics</option>
                                <option value="hiking">Hiking</option>
                                <option value="pilates">Pilates</option>
                                <option value="dancing">Dancing</option>
                                <option value="boxing">Boxing</option>
                                <option value="rowing">Rowing</option>
                                <option value="crossfit">CrossFit</option>
                                <option value="tai chi">Tai Chi</option>
                                <option value="jump rope">Jump Rope</option>
                                <option value="basketball">Basketball</option>
                                <option value="soccer">Soccer</option>
                                <option value="tennis">Tennis</option>
                                <option value="golf">Golf</option>
                                <option value="skiing">Skiing</option>
                                <option value="snowboarding">Snowboarding</option>
                                <option value="climbing">Climbing</option>

                          </select>
                        </div>
                      
                        <!-- Distance (for activities like running, cycling, etc.) -->
                        <div class="mb-3">
                          <label for="distance" class="form-label">Distance (in km/miles):</label>
                          <input type="number" id="distance" name="distance" class="form-control">
                        </div>
                      
                        <!-- Duration -->
                        <div class="mb-3">
                          <label for="duration" class="form-label">Duration (in minutes):</label>
                          <input type="number" id="duration" name="duration" class="form-control">
                        </div>
                      
                        <!-- Intensity Level -->
                        <div class="mb-3">
                          <label for="intensityLevel" class="form-label">Intensity Level :</label>
                          <input type="text" id="intensityLevel" name="intensityLevel" min="1" max="10" class="form-control">
                        </div>
                        <div class="mb-2">
                            <button type="submit" class="btn" name="act_btn" style="background-color: #2a2185;color:white;">Submit</button>                        </div>
                      </form>
                      
                </div>
            </div>   
            
        
            
        </div>


        <!--1-->
   <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>
    <script src="assets/jquery.js"></script>
   
    <script>
$(function() {
    $("#distance").change(function() {
        let distance = parseInt($("#distance").val());

        // Calculate intensity based on distance (you can adjust this logic)
        let intensity;
        if (distance < 10) {
            intensity = "Low";
        } else if (distance < 20) {
            intensity = "Medium";
        } else {
            intensity = "High";
        }

        // Display the intensity level (you can replace 'intensityOutput' with your target input ID)
        $("#intensityLevel").val(intensity);
    });
});



    </script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>