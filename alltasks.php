<?php
session_start();
$loginst = 0;
$no=1;

if ($_SESSION["sess_user"]){ 

$user_check = $_SESSION["sess_user"];
}

include "connection.php";
if(isset($_SESSION["sess_user"]))
{
    
}
else {
    header('location:index.php');
}// Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } ?>
<head>
        <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">TASK Name</th>
      <th scope="col">  End Date</th>
      <th scope="col">Operations</th>
      <th scope="col">Status</th>
            <th scope="col">ADD Important</th>

    </tr>
  </thead>

  <tbody>
<?php
$sql = "SELECT name FROM userdata where email='$user_check'";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
    $dbname=$row['name'];

           }
       }
           $result = mysqli_query($conn,"SELECT * FROM taskdata where email='$user_check'");
$rowcount=mysqli_num_rows($result);

if($rowcount != 0)
{
    while($row = mysqli_fetch_assoc($result)) { 
            if($row['completed']==0&&$row['important']==0){
                ?>
      <tr>
      <th scope='row'><?=$no?></th>
        <td><?=$row['task']?></td>
        <td><?=$row['enddate']?></td>
        <td><a href="edit.php?id=<?php echo $row['id'] ?>" class='btn btn-primary'">Edit</a>&nbsp;&nbsp;<a href="delete.php?id=<?php echo $row['id'] ?>" class='btn btn-danger'">Delete</a></td>
        <td><a href="complete.php?id=<?php echo $row['id'] ?>" class='btn btn-success'">Completed</a>&nbsp;</td>
        <td><a href="addimportant.php?id=<?php echo $row['id'] ?>" class='btn btn-warning'">Important</a>&nbsp;</td>

            </tr>
  <?php 
  $no++; }
  }
}
else {
    echo "NO AVAILABLE REQUESTS";
}
?>
</tbody>
</table>

	
</body>
</html>
