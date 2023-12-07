<?php
session_start();
error_reporting(1);
include('connect.php');
if(isset($_POST['login'])){
    $email = $_POST['e'];
    $pass = $_POST['p'];
    $sql = ("SELECT * FROM register WHERE email='$email' && pass ='$pass'");
    $res = mysqli_query($con,$sql) or die(mysqli_error());
    $arr = mysqli_fetch_array($res);
    if(($arr['email']==$email) && ($arr['pass']==$pass)){
        header('location:menu.php');
    }else{
        $error = '"Email or Password wrong"';
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

    <div class="login">
        <div>
            <center><h2>Login</h2></center>
            <br><br>
            <center><span><h2 style="color:red;font-size:1rem;"><?php echo $error; ?></h2></span></center>
            <center><span><h2 style="color:yellow;font-size:1rem">Welcome from FOA <?php echo $_REQUEST['name']; ?></h2></span></center>
            <br>
            <form method='post'>
                <label for="">Email</label> &nbsp; &nbsp; &nbsp; &nbsp; 
                <input type="email" name='e' required>
                <br><br>
                <label for="">Password</label>&nbsp;
                <input type="password" name='p' required>
                <br><br>
                <button type="submit" name='login'>Login</button>
            </form>
            <br>
            <p>If you don't have an account?Click ===> <a class="l" href="register.php">Register</a></p>
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