<?php 
session_start();
include "connection.php";

$_SESSION['key']='1';

$loginst = 0;
if ($_SESSION["sess_user"]){ 

$user_check = $_SESSION["sess_user"];
}

echo $user_check;

$email=$user_check;
$task=$_POST['task'];
$date=$_POST['date'];
$completed=0;
$a=0;
if(isset($_POST['chk'])==1)
{
$a=1;
}

//important to do...

if(mysqli_connect_error()){
  die('connect error('.mysqli_connect_error().')'.mysqli_connect_error());
}
else
{
    $insert = $conn->query("INSERT into taskdata (email,task,enddate,important,completed) VALUES ('$email','$task','$date','$a','$completed')");

if($insert){
  //echo STR_TO_DATE('"'.$date.'"', '%m/%d/%Y');
    
     header("location:home.php");
   }
  
  else{
   //echo $d1;
     echo "<script>alert('unsuccess');</script>";
     //header("location:tasks.php");
  }
  //$stmt->close();
  $conn->close();
}



 ?>
 