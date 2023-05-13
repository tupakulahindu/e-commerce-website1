<?php

include_once "../shared/connection.php";

$id=$_GET['pid'];
$cmd="delete from products where pid=$id";
$sql_status=mysqli_query($conn,$cmd);

if($sql_status)
{
    echo "Deleted Successfully!";
    header('location:view.php');
}
else
{
    echo "Failed to Delete";
}


?>