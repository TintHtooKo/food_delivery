<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOA</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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
                <li><a href="index.php">Home</a></li> 
                <li><a href="about.php">About</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        <div class="line"> <i class="fa-solid fa-bars"></i></div>
    </div>

    <div class="drop">
        <li><a href="index.php">Home</a></li> 
        <li><a href="register.php">Register</a></li>
        <li><a href="login.php">Login</a></li> 
        <li><a href="register.php" class="start">Get Started</a></li>  
    </div>

        <div class="about">
        <center><h1  style="color:white;">ABOUT US</h1></center>
        <br><br>
        <div class="phi">
            <img src="img/inner_image_02.jpg">
            <div class="w"><h3>Our Philosophy</h3>
                <br><br>
            <p>
                We are lucky to live in a glorious age that gives us everything we could
                ask for as a human race. What more could you need when you have meat covered
                in cheese nestled between bread.
<br><br>
                From smashed patties at Shake Shack to Glamburgers at Honky Tonk, there’s 
                a little something for everyone. Some burgers are humble, and some are ostentatious,
                and you just have to try them all to figure out what you want. Feel free to contact 
                us.
            </p>
        </div>
        </div>
<br><br><br>
        <div class="phi">
            <img src="img/inner_image_03.jpg">
            <div class="w"><h3>Local Ingredient</h3>
                <br><br>
            <p>
                Whether you’re a ketchup and mustard loyalist or you prefer 
                house sauce to no sauce, you can agree that every cheeseburger
                has it’s own special flair. Top tip: house sauce begs to be ordered
                on the side for fry-dipping purposes.
<br><br>
                The cheese melts on the burger and in your mouth, perfectly complementing the 
                medium-rare beef. Any burger lover worth their salt knows the best patty is comprised 
                of ground chuck and brisket.
            </p>
        </div>
        </div>
<br><br><br>
        <div class="phi">
            <img src="img/inner_image_04.jpg">
            <div class="w"><h3>Delivery or Takeaway</h3>
                <br><br>
            <p>
                We’ve made things doubly easy for you by 
                offering takeaway options as well as door-to-door                 
                delivery every day.
<br><br>
                We are lucky to live in a glorious age that gives us
                everything we could ask for as a human race. What more 
                could you need when you have meat covered in cheese nestled
                between bread.
            </p>
        </div>
        </div>
        </div>

</div>
</header>
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