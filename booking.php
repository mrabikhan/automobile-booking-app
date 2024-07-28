<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/booking.css">
</head>
<body>
    <div class="nav">   
        <ul>
            <li><a href="home.php">Home <i class="fa fa-home"></i></a></li>
            <li><a href="products.php">Products <i class="fa fa-car"></i></a></li>
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
         <div class="bookback">
          <img src="images/regwall.jpg">
         </div>

        <div class="container">
           <h1>Online Vehicle Booking</h1> 
            <form action="bookconn.php" method="post">
            <br><br><br>   
                <label>Full Name</label>
                <input type="text" placeholder="enter your name" name="fullname">
                <br><br><br>
                <label>Email Id</label>
                <input type="text" placeholder="enter your email" name="emailid"> 
                <br><br><br>
                <label>CNIC</label>
                <input type="text" placeholder="enter your cnic" name="cnic">
                <br><br><br>
                <label>Contact</label>
                <input type="number" placeholder="enter your mobile no" name="contact">
                <br><br><br>
                <label>Variant</label>
                 <select name="vehicle" id="vehicle">
                     <option>--Select Vehicle--</option>
                     <option value="City13mt">City 1.3 MT</option>
                     <option value="City13pros">City 1.3 Pros</option>
                     <option value="City15asp">City 1.5 Aspire</option>
                     <option value="Civic18">Civic 1.8</option>
                     <option value="Civic18oriel">Civic 1.8 Oriel</option>
                     <option value="Civic15tx">Civic 1.5 Turbo</option>
                     <option value="BRV15mt">BRV 1.5 MT</option>
                     <option value="BRV15s">BRV 1.5 S</option>
                     <option value="Vezel15x">Vezel 1.5 X</option>
                     <option value="Vezel15G">Vezel 1.5 G</option>
                     <option value="Vezel15hb">Vezel 1.5 Hybrid</option>
                 </select>
                <br><br><br>
                 <label>City</label>
                <select name="city" id="city">
                    <option>--Select City--</option>
                    <option value="lhr">Lahore</option>
                    <option value="isb">Islamabad</option>
                    <option value="fsb">Faisalabad</option>
                    <option value="mlt">Multan</option>
                    <option value="kht">Karachi</option>
                    <option value="qta">Quetta</option>
                    </select>
                    <br><br><br>

                <label>Are you tax filler?</label><br><br>
                Yes: <input type="checkbox" value="y" name="tax">
                No: <input type="checkbox" value="n" name="tax">
                <br><br><br>
                <input type="submit" class="submit" name="submit">
                <br><br>
            </form>
            <a href="home.php"><button>Back</button></a>
        </div>

        
        <div class="footer">
            <h3>Contact</h3>
            <h3>Our Services</h3>
            <h3>Standards</h3>
            <h3>Social Media</h3>
    
            <div class="para">
                <p>
                    31 Tipu Block new Garden town <br>
                    Lahore kalma chowk. <br>
                    17 km Main Raiwind Road, Lahore. <br>
                    Superior Gold Campus, <br>
                    6 KM Raiwind Rd, Lahore <br>
                    <br><br>
                    UAN: 042-111-00-00-78 <br>
                     0333 – 4910885 <br>
                    info@superior.edu.pk <br>
                    admissions@superior.edu.pk <br>   
                </p>
    
                <p>
                    All About Superior <br>
                    Superior Documentary <br>
                    Picture Gallery <br>
                    Feedback <br>
                    Department of Public Relations <br>
                </p>
    
                <p> 
                    Admissions Procedure <br>
                    Scholarships and Fees <br>
                    Policies <br>
                    Governing Financial Awards <br>
                    Journals List <br>
                    ORIC <br>
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