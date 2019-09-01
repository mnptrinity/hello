<?php
include "connection.php";


if(isset($_GET['id']))
{
    $id=$_GET['id'];
$result = mysqli_query($conn,"UPDATE taskdata SET important=0 where id='$id'");
    if($result)
{
    echo "<script>alert('successfully Removed from important!');</script>";
    echo "<script>window.location.href ='home.php';
</script>";
}
else
{
	echo "<script>alert('unsuccess');</script>";
}
    }

    ?>