<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOA</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Croissant+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    
</head>
<body>
    <header>
    <div class="bar">
        <div class="logo"><h2>FOA</h2></div>
       
            <ul>
                <li><a href="home.php">Home</a></li> 
                <li><a href="menu.php">Menu</a></li>
                <li><a href="feedback.php">Feedback</a></li>
                <li><a href="logout.php">Logout</a></li> 
            </ul>
        <div class="line"> <i class="fa-solid fa-bars"></i></div>
    </div>

    <div class="drop">
        <li><a href="home.php">Home</a></li> 
        <li><a href="menu.php">Menu</a></li> 
        <li><a href="feedback.php">Feedback</a></li>
        <li><a href="logout.php">Logout</a></li>     
    </div>

</header>

<div class="menu">
<div>
    <center><p>Top Food</p></center>
    <br>
    <center><h1>All menu</h1></center>
</div>

<div class="piza-img">
<?php
error_reporting(1);
session_start();
include('connect.php');
    $pro=mysqli_query($con,"SELECT * FROM all_product");
    while($res = mysqli_fetch_array($pro)){
        $pro_id = $res['id'];
        $pro_img = $res['image'];
        $pro_price = $res['price'];
        $pro_name = $res['name'];
        echo 
               " <div class='piza-list'>
                <img src='admin/product/$pro_img' >
                <center><h3>$pro_name</h3></center><br>
                <center><h4>$pro_price Ks</h4></center><br>
                <center><a href='order.php?buy=$pro_id'>Buy</a></center>
                </div>"
        ;
    }
?>
</div>

<div class="footer">
        <marquee behavior="" direction="left">
            <h4 style="color:white;">2023 &copy; Tint Htoo Ko</h4>
        </marquee>
    </div>
















<script>
    const toggleLine = document.querySelector('.line');
    const toggleIcon = document.querySelector('.line i');
    const drop =document.querySelector(".drop");

    toggleLine.onclick = function(){
        drop.classList.toggle('open')
        const isOpen = drop.classList.contains('open')

        toggleIcon.classList = isOpen
        ? 'fa-solid fa-xmark'
        : 'fa-solid fa-bars'
    } 

</script>
</body>
</html>