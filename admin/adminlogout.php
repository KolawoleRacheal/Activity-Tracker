<?php
error_reporting(E_ALL);
session_start();
require_once "classes/Adminlogin.php";

$admin = new Adminlogin;

$admin -> admin_logout();

header("location:admin.php");
exit();
?>