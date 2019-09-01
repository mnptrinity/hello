<?php
session_start(); 
$_SESSION['key']='0';
if(isset($_POST['submit'])){
include "connection.php";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
	$uemail=$_POST['uemail'];
	$upass=$_POST['upass'];

	$sql = "SELECT * FROM userdata where email='$uemail' && password='$upass'";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
       $dbusername=$row['email'];  
    $dbpassword=$row['password']; 
    $dbname=$row['name'];
           }

           if($uemail == $dbusername && $upass == $dbpassword)  
    {  
    $_SESSION['key']='1';
    $_SESSION['sess_user']=$dbusername;
    $dbname1=$dbname;
     $user=$_SESSION['sess_user'];
   header("location:home.php");
   }
 }





else {  
    echo "Invalid username or password!"; 

}

}

else {
  $_SESSION['key']='0';
}



?>