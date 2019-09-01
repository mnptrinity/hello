<?php
include "connection.php";


if(isset($_GET['id']))
{
    $id=$_GET['id'];
$result = mysqli_query($conn,"UPDATE taskdata SET completed=0 where id='$id'");
    if($result)
{
    echo "<script>alert('successfully Removed from Completed Task!');</script>";
    echo "<script>window.location.href ='home.php';
</script>";
}
else
{
	echo "<script>alert('unsuccess');</script>";
}
    }

    ?>