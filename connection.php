<?php
$servername = "localhost";
$username = "username";
$password = "pass";
$dbname = "dbname";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$_SESSION['key']=0;
?>