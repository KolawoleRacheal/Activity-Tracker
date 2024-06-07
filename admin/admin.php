<?php
    error_reporting(E_ALL);
    session_start();
        // echo password_hash('admin1234',PASSWORD_DEFAULT);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Rayfit</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 mb-3 p-5 shadow">
                <h1>Admin Login</h1>
                <?php
                    if(isset($_SESSION["admin_errormsg"])){
                        echo "<p class ='alert alert-danger'>".$_SESSION["admin_errormsg"]."<p>";
                        unset($_SESSION["admin_errormsg"]);
                    }
                ?>
                <form action="process/admin_process.php" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control">
                    </div> 
                    <div class="mb-3">
                        <input type="submit" id="btnsub" name="btnsub" value="Submit" class="form-control btn btn-dark">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>