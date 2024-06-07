<?php
    
    error_reporting(E_ALL);
    session_start();
    require_once "index.php";
    require_once "classes/User.php";
    require_once "classes/sanitizer.php";

    //echo "Hello world";
    //echo password_hash('1234',PASSWORD_DEFAULT);

    $use1 = new User;

    if(isset($_POST["sub_btn"])){
        $firstname =sanitizer($_POST['firstname']);
        $lastname = sanitizer($_POST['lastname']);
        $email = sanitizer($_POST['email']);
        $password = sanitizer($_POST['password']);
        $password =  password_hash($password, PASSWORD_DEFAULT);

        //echo "Hello world";
    
        if(empty($firstname) || empty($lastname) || empty($email) || empty($password)){
            $_SESSION['errormsg'] = "All fields are required";
            header("location:index.php");
        }else{
            $check = $use1->insert_activity($firstname,$lastname,$email,$password);
            if($check){
                $_SESSION['useronline'] = $check;
                //header("location:../dashboard.php");
            }else{
                //header("location:index.php");
            }
        }
    //Try it out, fill the form and submit, then check your database to confirm if the data has been inserted
    }else{
        $_SESSION['errormsg'] = "Please complete the form";
        // header("location:index.php");
        // exit();
    }
       




?>