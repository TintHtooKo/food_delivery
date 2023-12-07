<?php
error_reporting(1);
session_start();
include('connect.php');
if(isset($_POST['send'])){
    $name = $_POST['n'];
    $email = $_POST['eid'];
    $message = $_POST['msg'];
    $checke = mysqli_query($con,"SELECT * FROM register WHERE email='$email'");
    $res = mysqli_fetch_array($checke);
    if($email != $res['email']){
        $error = "Email not found!";
    }else{
        $sql = mysqli_query($con,"INSERT INTO contact VALUES ('$name','$email','$message')");
        $success = "We receive your message. Thanks for contact us.";
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
    <div class="bar">
        <div class="logo"><h2>FOA</h2></div>
       
            <ul>
                <li><a href="home.php">Home</a></li> 
                <li><a href="menu.php">Menu</a></li>
                <li><a href="contact.php">Contact</a></li>
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

<div class="order">
    <div><img src="img/contact.png"></div>
    <div class="ord">
    <center><h1 style="color:white;">Feedback</h1></center>

    <br><br>
    <center><p style="color:red;"><?php echo $error; ?></p></center>
    <center><p style="color:yellow;"><?php echo $success; ?></p></center>
    <br>
    <form method = 'post'>
    

 
<label style="color:white;">Name</label><br>
        <input name='n' type="text" required>
<br><br>
        <label style="color:white;">Email</label><br>
        <input name='eid' type="email" required>
<br><br>
        <label style="color:white;">Message</label><br>
        <textarea  name="msg" cols="30" rows="10" required></textarea>
<br><br>
 
        <center><button name='send' type='submit'>Send</button></center>
    </form> 
    </div>
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

    
    const change=()=>{
        const totalInput2 = document.getElementById("total2");
        const totalInput = document.getElementById("total");
        const qty = document.getElementById("qty");
        total_price = totalInput.value
        price = totalInput2.value
        total_qty = qty.value
		totalInput.value = price * total_qty
	}

</script>
</body>

</html>