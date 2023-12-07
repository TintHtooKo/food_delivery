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
<div class="ad"><center><h>FOA Admin Panel</h></center></div>
<div class="order">
    <center><h1>Feedback</h1 ></center>
    <br><br>
<table class="table">
   <thead>
        <tr>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">Message</th>

        </tr>
    </thead>
    <tbody>
        
            <?php
                $cont = mysqli_query($con,"SELECT * FROM contact");
                while($row = mysqli_fetch_array($cont)){
                    $name = $row['name'];
                    $email = $row['email'];
                    $msg = $row['message'];
                    echo "
                    <tr>
                        <td>$name</td> 
                        <td>$email</td> 
                        <td>$msg</td>  
                        </tr>  
                        ";
                }
              
            ?>
            
    </tbody>
    </table>
    </div>
</div>
</body>
</head>