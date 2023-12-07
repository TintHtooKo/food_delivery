<?php
error_reporting(1);
session_start();
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital@1&family=DM+Serif+Display:ital@1&family=Pacifico&family=Titillium+Web:wght@600&display=swap" rel="stylesheet">
</head>
<body>


<div class="sidenav">
  <a href="home.php">Home</a><br>
  <a href="product.php">View Product</a><br>
  <a href="update.php">Add New Product</a><br>
  <a href="view_contact.php">View Feedback</a><br>
  <a href="logout.php">Logout</a>
</div>
<br><br><br><br>

<div class="main">
<div class="ad"><center><h1>FOA Admin Panel</h1></center></div>
<div class="order">
    <center><h1>Order List</h1></center>
    <br><br>
<table class="table">
   <thead>
        <tr>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">phone</th>
        <th scope="col">address</th>
        <th scope="col">order-type</th>
        <th scope="col">quantity</th>
        <th scope="col">price</th>
        <th scope="col">order-no.</th>
        </tr>
    </thead>
    <tbody>
        
            <?php
                $order = mysqli_query($con,"SELECT * FROM order_pro");
                while($list = mysqli_fetch_array($order)){
                  $p_name = $list['name'];
                  $p_email = $list['email'];
                  $p_phone = $list['phone'];
                  $p_address = $list['address'];
                  $p_type = $list['type'];
                  $p_qty = $list['qty'];
                  $p_price = $list['price'];
                  $p_ordno = $list['no'];
                  echo 
                     " <tr>

                        <td>$p_name</td>
                        <td>$p_email</td>
                        <td>$p_phone</td>
                        <td> $p_address</td>
                        <td> $p_type</td>
                        <td>$p_qty </td>
                        <td>$p_price Ks</td>
                        <td> $p_ordno</td>
                      </tr>"
                  ;
                }
            ?>
            
    </tbody>
    </table>
    </div>
</div>
</body>
</head>