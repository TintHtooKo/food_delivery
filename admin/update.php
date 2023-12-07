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
<?php
    $pname = $_POST['pn'];
    $pri = $_POST['p'];
    $img = $_FILES['img']['name'];
if(isset($_POST['update'])){
  $sql = "INSERT INTO all_product VALUES('','$pname','$pri','$img')";
  $result = mysqli_query($con,$sql) or die(mysqli_error());
  if($result){

    move_uploaded_file($_FILES['img']['tmp_name'], "product/" . $_FILES['img']['name']);
    header('location:product.php');
  }
}


?>
<div>
  <center><h1 >Add New Product</h1></center>
  <div class="upd">
    <form method='post' enctype="multipart/form-data">
    <label >Product name</label><br>
    <input name="pn" type="text">
    <br><br>
    <label >Price</label><br>
    <input name='p' type="text">
    <br><br>
    <label>Product-img</label><br>
    <input name='img' type="file">
    <br><br>
    <button name="update" type="submit">Update</button>
    </form>
</div>
</div>
</div>



</body>
</html>