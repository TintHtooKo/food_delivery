<?php
session_start();
error_reporting(1);
include('connect.php');

if(isset($_POST['reg'])){
    $name = $_POST['n'];
    $email= $_POST['e'];
    $city= $_POST['c'];
    $phone = $_POST['ph'];
    $pass = $_POST['p'];
    $cpass = $_POST['cp'];
    $check_eid = mysqli_query($con,"SELECT email FROM register WHERE email='$email'");
    $check_ph  = mysqli_query($con, "SELECT phone FROM register WHERE phone = '$phone'");
    if($pass != $cpass){
        $msgpass = "'Password does not match'";
    }elseif(mysqli_num_rows($check_eid)>0){
        $msge = "'Email Already exists!'";
    }elseif(mysqli_num_rows($check_ph)>0){
        $msgp = "'Phone NO. Already exists!'";
    }elseif(strlen($pass) < 7){
        $msglen = "'password should be more than or equal to seven characters'";
    }else{
        $sql = "INSERT INTO register VALUES('','$name','$email','$city','$phone','$pass')";
        $result = mysqli_query($con,$sql);
        if($result){
            echo "<script>location.href='login.php?name=$name'</script>";;
        }
    }
}

?>
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
    <div class="reg">
    <div class="bar">
        <div class="logo"><h2>FOA</h2></div>
       
            <ul>
                <li><a href="index.php">Home</a></li> 
                <li><a href="about.php">About</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        <div class="line"> <i class="fa-solid fa-bars"></i></div>
    </div>

    <div class="drop">
        <li><a href="index.php">Home</a></li> 
        <li><a href="about.php">About</a></li>
        <li><a href="register.php">Register</a></li>
        <li><a href="login.php">Login</a></li> 
        <li><a href="register.php" class="start">Get Started</a></li>       
    </div>

    <div class="register">
        <div>
            <center><h2>Register</h2></center>
            <br><br>
            <center><span><h2 style="color:red;font-size:1rem;"><?php echo $msgpass; ?></h2></span></center>
            <center><span><h2 style="color:red;font-size:1rem;"><?php echo $msge; ?></h2></span></center>
            <center><span><h2 style="color:red;font-size:1rem;"><?php echo $msgp; ?></h2></span></center>
            <center><span><h2 style="color:red;font-size:1rem;"><?php echo $msglen; ?></h2></span></center>
            <br><b></b>
            <form method="post">
                <label for="">Full Name</label>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <input type="text" name='n' required>
                <br><br>
                <label for="">Email</label> &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <input type="email" name='e' required>
                <br><br>
                <label for="">City</label>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <input type="text" name='c' required>
                <br><br>
                <label for="">Phone No.</label> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp;  
                <input type="text" name='ph' required>
                <br><br>
                    <label for="">Password</label>&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <input type="password" name='p' required>
                <br><br>
                    <label for="">Confirm Password</label>
                    <input type="password" name='cp' required>
                <br><br>
                <button type="submit" name='reg' href="login.php">Register</button>
            </form>
            <br>
            <p>Have you already register?Click ===> <a class="l" href="login.php">Login</a></p>
        </div>
    </div>
    </div>
</div>

<div class="footer">
        <marquee behavior="" direction="left">
            <h4 style="color:white;">2023 &copy; Tint Htoo Ko</h4>
        </marquee>
    </div>

    </header>





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