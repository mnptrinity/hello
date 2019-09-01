<?php
session_start();
include "connection.php";
$_SESSION['key']='1';

$loginst = 0;
if ($_SESSION["sess_user"]){ 

$user_check = $_SESSION["sess_user"];
}


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT name FROM userdata where email='$user_check'";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
    $dbname=$row['name'];

           }
       }
           

echo $dbname;




$task=$_POST['task'];
$completed=0;
$date=$_POST['date'];
$important=$_POST['chk'];
$mod=$_POST['mod'];
$a=implode(",",$important);
//important to do...
//echo $email;


 

 
    
    //echo $email;
if($a=="1")
{
	$a=1;
}
else
$a=0;

    $insert = $conn->query("UPDATE taskdata SET task='$task' WHERE task IN('".$mod."')");
    $insert = $conn->query("UPDATE taskdata SET important='$a' WHERE task IN('".$mod."')");
    $insert = $conn->query("UPDATE taskdata SET enddate='$date' WHERE task IN('".$mod."')");
   // $insert = $conn->query("UPDATE taskdata SET important='$a' WHERE task IN('".$mod."')");
   // //$stmt = $conn->prepare($INSERT);
    //$stmt->bind_param("ssssss",$email,$password,$name,$rollnumber,$department,$sport);
    //$stmt->execute();

if($insert){
    
  
     header("location:hme.php");
     //header("location:hme.php");s
   }
  
  else{
     echo "unsuccess";
  }
  //$stmt->close();
  $conn->close();




 ?>



    