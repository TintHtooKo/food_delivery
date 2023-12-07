<?php
error_reporting(1);
session_start();
include('connect.php');
if(isset($_POST['login'])){
    $user = $_POST['u'];
    $pass = $_POST['p'];
    $sql = ("SELECT * FROM admin WHERE user='$user' && pass ='$pass'");
    $res = mysqli_query($con,$sql) or die(mysqli_error());
    $arr = mysqli_fetch_array($res);
    if(($arr['user']== $user) && ($arr['pass']==$pass)){
        header('location:home.php');
    }else{
        $error = "username or password does not match!";
    }
}
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
<body style="background:linear-gradient(rgb(0,106,174),rgb(0,106,174));">
        
    <div class="login-box">
    <h2>Admin Login</h2>
    <p style="color:red;"><?php echo $error;?></p>
    <form method="post">
      <div class="user-box">
        <input type="text" name="u" required="">
        <label>Username</label>
      </div>
      <div class="user-box">
        <input type="password" name="p" required="">
        <label>Password</label>
      </div>
      <button type="submit" name="login">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Login
      </button>
    </form>
  </div>
</body>
</html>

