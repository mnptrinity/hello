<?php 
$name=$_POST['uname'];
$email=$_POST['uemail'];
$password=$_POST['upass'];

//$check = getimagesize($_FILES['image']['tmp_name']);

if(!empty($email) || !empty($password) || !empty($name) ){
$host = "localhost";
$dbUsername="root";
$dbPassword="";
$dbname="todo";


$conn =new mysqli($host,$dbUsername,$dbPassword,$dbname);
if(mysqli_connect_error()){
  die('connect error('.mysqli_connect_error().')'.mysqli_connect_error());
}
else
{
  $SELECT="SELECT email from userdata Where email = ?  Limit 1";

 

//$INSERT ="INSERT Into register(email,password,name,rollnumber,department,sport) values (?,?,?,?,?,?)";
  $stmt=$conn->prepare($SELECT);
  $stmt->bind_param("s",$email);
  $stmt->execute();
  $stmt->bind_result($email);
  $stmt->store_result();
  $rnum=$stmt->num_rows;

  if($rnum==0){
    $stmt->close();

    $insert = mysqli_query($conn,"INSERT into userdata (name,email,password) VALUES ('$name','$email','$password')");
    //$stmt = $conn->prepare($INSERT);
    //$stmt->bind_param("ssssss",$email,$password,$name,$rollnumber,$department,$sport);
    //$stmt->execute();

if($insert){
    
  
     header("location:indx.php");
   }
  }
  else{
     echo '<div class="alert alert-info">
  <strong>info!</strong> Already registered email or roll number <a href="regform2.php" class="alert-link">click to register</a>.
</div>';
  }
  //$stmt->close();
  $conn->close();
}
}
else{
  echo "All fields required";
  die();
}

 ?>