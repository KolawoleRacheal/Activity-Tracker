<?php
session_start();
require_once "../classes/User.php";
$user=new User;

   if(isset($_POST['set_goals'])){
      $desc=$_POST['cat'];
      $id=$_SESSION['useronline'];
      // print_r($id);
   $result=$user->check_goals($id);
   if(empty($desc)){
      $_SESSION['errormsg']="All fields are required";
      header("location:../dashboard.php");
      exit();
   }
   $result=$user->check_goals($id);
   if($result>0){
      $_SESSION['errormsg']="Please Complete your previous goals to add new one";
      header("location:../dashboard.php");
      exit();

   }


      $goals=$user->insert_goals($desc,$id);
   
      if($goals){
         $_SESSION['feedback']="Goal Added Successfully";
         header("location:../dashboard.php");
         exit();
      }else{
         $_SESSION['errormsg']="Failed to add goals";
         header("location:../dashboard.php");
         exit();
      }




   }else{
   header("location:../dashboard.php");
   exit();
   }

?>