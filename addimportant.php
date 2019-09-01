<?php
include "connection.php";


if(isset($_GET['id']))
{
    $id=$_GET['id'];

$result = mysqli_query($conn,"UPDATE taskdata SET important=1 where id='$id'");
if($result)
{
    echo "<script>alert('Task Successfully Moved to Important!');</script>";
    echo "<script>window.location.href ='home.php';
</script>";
}
else
{
	echo "<script>alert('unsuccess');</script>";
}
    }

    ?>