<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/logstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="head1">
        <img src="images/logo2.png">
        <h1>Honda Automobile</h1> 
        <p>Power Of Dreams</p>
    </div>
    
    <div class="logwall">
    <img src="images/logwall.jpg">
    </div>

    <div class="container">
       <form action="verify.php" method="post">
       <br><h1>Login Form</h1><br><br>
        <h5><i class="fa fa-envelope"> Email Address</h5></i><br>
        <input type="text" placeholder="enter your email" name="emailid"><br><br>
        <h5><i class="fa fa-lock"> Password</i></h5><br>
        <input type="password" placeholder="enter your password" id="password" name="pass">
        <span > <i class="fa fa-eye" onclick="toggle()"> </i></span>
        <br><br><br>
        <input type="submit" class="sub" value="login" name="submitlog"><br><br>
        </form> 
        <button><a href="register.php">Sign Up</a></button>
    </div>
    <script>
        var state=false;
        function toggle()
        {
        if(state)
        {
        document.getElementById('password').setAttribute ("type","password")
        state=false;    
        }  
        else
        {
        document.getElementById('password').setAttribute ("type","text")
        state=true;  
        }  
        }
    </script>
</body>
</html>