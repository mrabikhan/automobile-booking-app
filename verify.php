<?php
$severname="localhost";
$username="root";
$password="";
$dbname="test";
$conn=mysqli_connect($severname,$username,$password,$dbname);

if(isset($_REQUEST['submitlog']))
{
    $email=$_REQUEST['emailid'];
    $pass=$_REQUEST['pass'];
    $sql="select * from register where emailid='$email' and pass='$pass'";
    $result=mysqli_query($conn,$sql);
    $rows=mysqli_num_rows($result);
     
    if($rows==true)
    {
    session_start();
    $_SESSION['myemail']=$email;
    ?>
    <script>
    alert("Login Successfull");
    location.replace("home.php");
    </script>
    <?php   
    }

    else
    {    
     echo"<center><h1>There is no data in database!</h1></center>";
    }
}
?>