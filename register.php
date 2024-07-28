<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regiteration</title>
    <link rel="stylesheet" href="css/regstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="head2">
        <img src="images/logo2.png">
        <h1>Honda Automobile</h1>
        <p>Power Of Dreams</p>
        </div>
   
      <div class="regwall">
          <img src="images/regwall.jpg">
      </div>

    <div class="container2">
       <form action="registeration.php" method="post">
                <h1><i class="fa fa-user"> Get Registered</h1></i><br><br>
                <label>First Name:</label>
                <input type="text" placeholder="enter first name" name="fname" required>
                       <br><br>
                       <label> Last Name:</label>
                       <input type="text" placeholder="enter last name" name="lname" required>
                       <br><br>
                       <label>Email:</label>
                       <input type="text" placeholder="enter email address" name="emailid" required>
                        <br><br>
                        <label>Password:</label>
                       <input type="password" placeholder="enter your password" name="pass" required>
                       <br><br>
                    <div class="dob"> 
                        <label>DOB:</label>
                     <input type="number" placeholder="year" name="byear">
                     <input type="text" placeholder="month" name="bmonth">
                     <input type="number" placeholder="date" name="bdate">
                       <br><br>
                     </div>
                     <label>Gender:</label>
                        Male <input type="radio" value="m" name="gender">
                        Female <input type="radio" value="f" name="gender">
                        Other <input type="radio" value="o" name="gender">
                        <br><br>
                      <input type="submit"class="submit" name="submitreg"><br><br>
        </form>
        <center><button class="button"><a href="index.php">Back</a></button></center> 
    </div>
</body>
</html>