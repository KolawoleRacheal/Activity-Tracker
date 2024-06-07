<?php 
    error_reporting(E_ALL);
    session_start();
     //echo password_hash('1234',PASSWORD_DEFAULT);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="fontawesome/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Rayfit</title>
</head>
<body>
    <div class="container">
        <section>
              <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <?php

                                if(isset($_SESSION['errormsg'])){
                                    echo "<div class='alert alert-danger'>". $_SESSION['errormsg']." </div>";
                                    unset($_SESSION['errormsg']);
                                }



                            ?>
                            <form action="action_login.php" method="post" class="p-5 shadow">
                                <h2 class="card-title text-center text-success">Login here</h2> 
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="example@.com" required>
                                </div>
                                <label for="password">Password:</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="password" name="password" required>
                                    <span class="input-group-text" onclick="togglePassword()">
                                        <i class="fa fa-eye" id="show_eye"></i>
                                        <i class="fa fa-eye-slash d-none" id="hide_eye"></i>
                                    </span>
                                </div>
                                <div class="mt-3">
                                <input class="w-60 btn btn-lg btn-dark noround" type="submit" name="log_btn" value="Login">
                                </div>     
                            </form>
                        </div> 
                    </div>
                </div>
            </div>  
        </section>
        <main>
            <div class="row mt-5">
                <div class="col">
                    <p style="font-size: 16px;">Don't have an account? <a href="signup.php" style="text-decoration:none;" >signup here</a></p>
                </div>
                <div class="col">
                    <p style="text-align:end;" ><a href="index.php" style="text-decoration: none; ">Back to homepage</a></p>
                </div>
            </div>
        </main>
    </div>
    <script srd="jquery.js"></script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function togglePassword() {
            var passwordInput = document.getElementById("password");
            var showEye = document.getElementById("show_eye");
            var hideEye = document.getElementById("hide_eye");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                showEye.classList.add("d-none");
                hideEye.classList.remove("d-none");
            } else {
                passwordInput.type = "password";
                showEye.classList.remove("d-none");
                hideEye.classList.add("d-none");
            }
        }
    </script>
</body>
</html>