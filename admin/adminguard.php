<?php
error_reporting(E_ALL);

if(!isset($_SESSION["adminonline"])){
    header("location:admin.php");
    $_SESSION["admin_errormsg"] = "You need to login";
}

?>