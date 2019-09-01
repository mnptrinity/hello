<?php
session_start();
if(isset($_SESSION["sess_user"]))
{
include "connection.php";


if(isset($_GET['id']))
{
    $id=$_GET['id'];
$result = mysqli_query($conn,"DELETE FROM taskdata where id='$id'");
    if($result)
{
    echo "<script>alert('successfully deleted!');</script>";
    echo "<script>window.location.href ='home.php';
</script>";
}
else
{
	echo "<script>alert('unsuccess');</script>";
}
    }}
    else {
        header('location:index.php');
    }

    ?>