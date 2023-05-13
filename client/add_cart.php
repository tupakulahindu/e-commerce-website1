<?php

session_start();
$uname=$_SESSION['username'];
$uid=$_SESSION['userid'];

$id=$_GET['pid'];

include_once "../shared/connection.php";

//Blocking the Already AVailable Product for this Client;

$sql_result=mysqli_query($conn,"select * from cart where client_id=$uid and pdt_id=$id");
$total_row=mysqli_num_rows($sql_result);
if($total_row>0)
{
    echo "Product Already Added to Cart";
    die;
}

$cmd="insert into cart(client_id,client_name,pdt_id) values($uid,'$uname',$id)";
$sql_status=mysqli_query($conn,$cmd);
if($sql_status)
{
    echo "Added to Cart Successfully";
    header("location:view.php");
}
else
{
    echo "Failed to add cart", mysqli_error($conn);    
}

?>