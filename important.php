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
}
?>
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
      <th scope="col">Remove</th>
            <th scope="col">Delete</th>

    </tr>
  </thead>

  <tbody>

<?php

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$result = mysqli_query($conn,"SELECT * FROM taskdata where email='$user_check'");
$rowcount=mysqli_num_rows($result);

if($rowcount != 0)
{
    while($row = mysqli_fetch_assoc($result)) { 
            if($row['important']==1){
     ?> 
<tr>
           <th scope='row'><?=$no?></th>
        <td><?=$row['task']?></td>
        <td><?=$row['enddate']?></td>
        <td><a href="removeimportant.php?id=<?php echo $row['id'] ?>" class='btn btn-success'">Remove</a></td>
                <td><a href="delete.php?id=<?php echo $row['id'] ?>" class='btn btn-danger'">Delete</a></td>

            </tr>
        <?php
        $no++;
    }
  }
}
else {
    echo "NO AVAILABLE REQUESTS";
}
?>
