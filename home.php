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
    <div class="bg">
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
        <li><a href="index.php">Home</a></li> 
        <li><a href="menu.php">Menu</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <li><a href="logout.php">Logout</a></li>   
    </div>
    </header>

    <div class="latphat">
        <div class="reason">
        <h1>FOOD FOR ALL</h1>
        <br><br>
        <p>Elevating Your Dining Experience with Global Flavors. 
            Discover Convenience, Diversity, and Deliciousness at Your Doorstep. 
            Join FOA for a Culinary Journey Beyond Borders. Order Now and Savor the
             Taste of Quality, One Bite at a Time.</p>
             <br>
        </div>
    </div>
</div>


    <div class="serv-poto">
        <div>
            <center>
            <h2 class="h">Why Should Choose FOA?</h2>  
            </center>
        </div> 
                <div class="why">
                    <div class="cho">
                        <img src="img/ffood.png">
                        <h3>Fresh Ingredient</h3>
                    </div>
                    <div class="cho">
                        <img src="img/chef.png">
                        <h3>Skill Chefs</h3>
                    </div>
                    <div class="cho">
                        <img src="img/customer.png">
                        <h3>Amazing Customer Survice</h3>
                    </div>
                    <div class="cho">
                        <img src="img/deli.png">
                        <h3>Quick Delivery</h3>
                    </div>
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

    </script>
</body>
</html>