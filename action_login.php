<?php
    session_start();
    error_reporting(E_ALL);
    require_once "classes/sanitizer.php";
    require_once "classes/User.php";

    $use2 = new User;

    if(isset($_POST['log_btn'])){
        //Retreive form data
        $email = sanitizer($_POST['email']);
        $pwd = sanitizer($_POST['password']);

        //We want to check the method that will check if the credentials are valid
        $data = $use2->login($email,$pwd);
        if($data){
        $_SESSION['useronline'] = $data;
        header("location:dashboard.php");
        exit();
        header("location:login.php");
         exit();
        }
    }else{
        $_SESSION['errormsg'] = "please complete the form";
        header("location:login.php");
        exit();
    }




?>