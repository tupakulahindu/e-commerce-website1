<html>
    <head>
        <style>
            .product
            {
                width:300px;
                height:300px;
                border:4px solid black;
                display:inline-block;
                padding:20px;
                margin:10px;
                border-radius: 10%;
                border-radius: 15px 50px;
            }
            .image
            {
                width:100%;
                border-radius: 90%;
                border:2px solid green;
                
            }
            .name
            {
                font-family:"verdana";
                font-size:24px;
            }
            .action
            {
                display:flex;
                justify-content:space-around;
            }
            .action-edit
            {
                background-color:orange;
                padding:5px 8px;
                border-radius:5px;
                border:none;
                cursor:pointer;
                border-radius: 50%;
            }
            .action-delete
            {
                background-color:red;
                padding:5px 8px;
                border-radius:5px;
                border:none;
                cursor:pointer;
                border-radius: 50%;
            }
            
        </style>
    </head>
    <body>
        
    </body>
</html>
<?php
include_once "../shared/connection.php";

$cmd="select * from products";
$sql_result=mysqli_query($conn,$cmd);

while($row=mysqli_fetch_assoc($sql_result))
{
    $pid=$row['pid'];
    $name=$row['name'];
    $price=$row['price'];
    $details=$row['details'];   
    $impath=$row['impath'];

    echo "    
    <div class='product'>
            <div class='name'>$name</div>
            <div class='price'>$price</div>
            <img class='image' src='$impath'>
            <div class='details'>$details</div>

            <div class='action'>            
                <button class='action-edit'>Edit</button>
                <a href='delete_product.php?pid=$pid'>
                    <button class='action-delete'>Delete</button>
                </a>
            </div>
    </div>    
    ";

}



?>