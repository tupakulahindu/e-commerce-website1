<?php

include_once '../shared/connection.php';

session_start();

$_SESSION['login']=false;

$uname=$_POST['username'];
$password=$_POST['password'];

$sql_result=mysqli_query($conn,"select * from client where username='$uname' and password='$password'");
$total_rows=mysqli_num_rows($sql_result);

if($total_rows==0)
{
    echo "<h3>Invalid Credentials!!</h3>";
    die;
}

$row=mysqli_fetch_assoc($sql_result);
print_r($row);

echo "<br> Login Success!";
$_SESSION['login']=true;
$_SESSION['username']=$row['username'];
$_SESSION['userid']=$row['userid'];
header('location:view.php');


?>