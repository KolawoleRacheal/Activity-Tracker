<?php
    error_reporting(E_ALL);
    session_start();
    require_once("../classes/Adminlogin.php");
    require_once("../classes/sanitizer.php");
    $admin = new Adminlogin;

    if(isset($_POST["btnsub"])){
        // echo "Thankyou";
        $email = sanitizer($_POST['email']);
        $pass = sanitizer($_POST["password"]);
        
        $result = $admin->admin_login($email,$pass);

        if($result){
            $_SESSION["adminonline"]=$result;
            header("location:../dashboard.php");
            exit();
        }else{
            header("location:../admin.php"); 
        }
    }
    else{
        $_SESSION['admin_errormsg'] = "You need to complete the form";
        header("location:admin.php");
    }




?>