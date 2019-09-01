<?php
session_start();

include "connection.php";
if(isset($_SESSION["sess_user"]))
{

if(isset($_GET['id']))
{
    $id=$_GET['id'];

$result = mysqli_query($conn,"UPDATE taskdata SET completed=1 where id='$id'");
if($result)
{
    echo "<script>alert('Task Successfully Completed!');</script>";
    echo "<script>window.location.href ='home.php';
</script>";
}
else
{
	echo "<script>alert('unsuccess');</script>";
}
    }
}
else {
    header('location:index.php');
}

    ?>