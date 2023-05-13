<?php

$conn=new mysqli("localhost","root","","acme_sep");
if($conn->connect_error)
{
    echo "Connection Failed";
    die;
}
?>