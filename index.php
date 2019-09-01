<?php
session_start();
$_SESSION['key']='0';
header("location:home.php");  
?>