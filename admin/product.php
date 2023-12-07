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
<div class="pizza">
    <center><h1 >All menu</h1></center>

<div class="piza-img">
<?php
    $pro=mysqli_query($con,"SELECT * FROM all_product");
    while($res = mysqli_fetch_array($pro)){
      $pro_id = $res['id'];
      $pro_name = $res['name'];
      $pro_price = $res['price'];
      $pro_image = $res['image'];
        echo "
                <div class='piza-list'>
                <img src='product/$pro_image'>
                <center><h3>$pro_name</h3></center><br>
                <center><h4>$pro_price Ks</h4></center><br>
                <center><a href='delete.php?del=$pro_id & p_img=$pro_image'>Delete</a></center>
                </div>"
        ;
    }
?> 
</div>
</div>
</body>
</html>