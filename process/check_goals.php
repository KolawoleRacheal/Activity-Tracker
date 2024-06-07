<?php
session_start();
 require_once "../classes/User.php";

 $id=$_SESSION['useronline'];

 $user=new User;

 $result=$user->check_goals();
 print $result;

  if($result>0){
 
    print 1;
     
  }else{
    print 0;
  }

  




?>