<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="css/productstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="nav">
         
        <ul>
            <li><a href="home.php">Home <i class="fa fa-home"></i></a></li>
            <li><a href="#">Products <i class="fa fa-car"></i></a></li>
            <li><a href="booking.php">Online Booking <i class="fa fa-book"></i></a></li>
            <li><a href="#">Spare Parts <i class="fa fa-gear"></i></a></li>
            <li><a href="price.php">Get Price <i class="fa fa-money"></i></a></li>
            <li><a href="about.php">About Us <i class="fa fa-book"></i></a></li>
            <li><a href="contact.php">Contact Us <i class="fa fa-phone"></i></a></li>
        </ul>
    </div>

    <div class="logo">
        <h1>Honda <span>Automobile</span></h1>  
        <h3><i class="fa fa-user"> <?php echo $_SESSION['myemail'] ?></i></h3>
        <a href="logout.php"><button>Logout</button></a>
        <a href="home.php"><img src="images/logo.png"></a>
        </div>

        <div class="container">
         <div class="box1">
            <h1>Honda City ivtec 1.3 / 1.5 Aspire</h1> 
            <a href="booking.php"><button><i class="fa fa-edit"> Book Now</i></button></a>
            <img src="images/city1.jpg">
            <img src="images/city2.jpg">
            <img src="images/city3.jpg">
            <img src="images/city4.jpg">
         </div>
         <div class="box2">
            <h1>Honda Civic ivtec 1.5 Turbo X / 1.8 Oriel</h1>
            <a href="booking.php"><button><i class="fa fa-edit"> Book Now</i></button></a>
            <img src="images/Civic 1.jpg">
            <img src="images/Civic 2.jpg">
            <img src="images/civic3.jpg">
            <img src="images/civic 4.jpg"> 
         </div>
         <div class="box3">
            <h1>Honda BRV ivtec 1.5 MT / 1.5 S</h1>
            <a href="booking.php"><button><i class="fa fa-edit"> Book Now</i></button></a>
            <img src="images/brv1.jpg">
            <img src="images/brv2.jpg">
            <img src="images/brv3.png">
            <img src="images/Brv 5.jpg">
         </div>
         <div class="box4">
            <h1>Honda Accord Affordable Luxury</h1>
            <a href="booking.php"><button><i class="fa fa-edit"> Book Now</i></button></a>
            <img src="images/Accord 1.jpg">
            <img src="images/Accord 2.jpg">
            <img src="images/Accord 3.jpg">
            <img src="images/Accord 4.jpg">
         </div>
        </div>
        <div class="footer">
            <h3>Contact</h3>
            <h3>Our Services</h3>
            <h3>Standards</h3>
            <h3>Media</h3>
    
            <div class="para">
                <p>
                    25 km main Multan road <br>
                    bhai pheru Renala Khurd. <br>
                    Altas Honda Ltd, <br>
                    5 KM Multan Road Honda<br> 
                    Dealarship City Sales,Lahore <br>
                    <br><br>
                    UAN: 042-111-00-00-78 <br>
                     0333 – 4910885 <br>
                    info@honda.ltd.pk <br>
                    news@honda.ltd.pk <br>   
                </p>
    
                <p>
                    All About Honda Global <br>
                    Honda Documentary <br>
                    Picture Gallery <br>
                    Feedback <br>
                    Department of Public Relations <br>
                </p>
    
                <p> 
                    Booking Procedure <br>
                    Taxation and Payment <br>
                    Policies <br>
                    Governing Financial Awards <br>
                    Journals List <br>
                    FBR <br>
                </p>
    
                <p>
                    Blog <br>
                    News and Updates <br>
                    Events and PR <br>
                </p>
            </div>
            </div> 
            
    
            <div class="copyright">
                <p>@Copyright All Right Reserved 2021 </p>
            </div>
             
            <div class="social">
                <div class="item"><a href="https://facebook.com/" target="_blank"><img src="cssimages/l4.jpg"></a></div>
                <div class="item"><a href="https://twitter.com/?lang=en" target="_blank"><img src="cssimages/l3.jpg"></a></div>
                <div class="item"><a href="https://www.instagram.com/" target="_blank"><img src="cssimages/l5.jpg"></a></div>
                <div class="item"><a href="https://www.whatsapp.com/?lang=en" target="_blank"><img src="cssimages/l6.png"></a></div>
                <div class="item"><a href="https://www.youtube.com/" target="_blank"><img src="cssimages/l2.jpg"></a></div>
                <div class="item"><a href="https://www.google.com/gmail/" target="_blank"><img src="cssimages/l8.jpg"></a></div>
                <div class="item"><a href="https://pk.linkedin.com/" target="_blank"><img src="cssimages/l7.jpg"></a></div>
            </div>
</body>
</html>