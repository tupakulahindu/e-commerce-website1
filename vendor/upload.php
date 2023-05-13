<?php
session_start();
if(!isset($_SESSION['login']))
{
    echo "Illegal Attempt Login First";
    die;
}
if($_SESSION['login']==false)
{
    echo "Login Failed!";
    die;
}

$username=$_SESSION['username'];
echo "<h1>$username</h1>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        input
        {
            display: block;
            margin:10px;
        }
    </style>
</head>
<body>    

        <div class="d-flex justify-content-center align-item-center vh-100">

        <form action="upload_pdt.php"  method="post" enctype="multipart/form-data">
            <input type="text" name="name">
            <input type="text" name="price">
            <textarea name="details" id="" cols="30" rows="10"></textarea>
            <input type="file" name="pdt_image" accept=".jpg">

            <input type="submit">
        </form>

        </div>

</body>
</html>