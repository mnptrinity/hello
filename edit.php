<?php
include "connection.php";
session_start();
if(isset($_SESSION["sess_user"]))
{

/* for updating  query...*/
if(isset($_POST['submit']))
{
    $id=$_POST['id'];
    $task=$_POST['task'];
    $date=$_POST['datedt'];
    $result1 = mysqli_query($conn,"UPDATE taskdata SET task='$task' , enddate='$date' where id='$id'" );
if($result1)
{
    echo "<script>alert('success');</script>";
    echo "<script>window.location.href ='home.php';
</script>";
}
else
{
	echo "<script>alert('unsuccess');</script>";
}
}


if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $sql = "SELECT * FROM taskdata where id='$id'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $task=$row['task'];
    $enddate=$row['enddate'];
           }
       }
    }
}
else {
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<script src="jquery-3.3.1.min.js"></script>
<script>

</script>
<head>
    <title>Login V19</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                <form class="login100-form validate-form" name="tasks" action="edit.php" method="POST">
                    <span class="login100-form-title p-b-33">
						Account Task
					</span>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="task" value="<?php echo $task;?> " placeholder="Task Name">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <div class="wrap-input100 rs1 validate-input" data-validate="Date is required">
                        <input class="input100" type="text" name='datedt'  value="<?php echo $enddate; ?>  ">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>
                    
                <input type="text" name='id' value="<?php echo $id; ?>" style="visibility:hidden;"  />


                    <div class="container-login100-form-btn m-t-20">
                        <button class="login100-form-btn" type="submit" name="submit">
							Update Task
						</button>
                    </div>

                    
                </form>
            </div>
        </div>
    </div>



    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

			<form name="tasks" action="storetask.php" method="POST">
			<input type="text" name="task"/>&nbsp;&nbsp;&nbsp;<input type="date" name="date"  value="yyyy-mm-dd" />&nbsp;&nbsp;&nbsp;<input type="checkbox" name="chk[]" value="1" />
			<br>
			<br>
			<input type="submit" name="task_submit" value="Add_Task"/>
			<br>
			<br>
		</form>
		</div>
	</div>
</body>
</html>