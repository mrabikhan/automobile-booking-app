<?php
$fullname=$_POST['fullname'];
$email=$_POST['emailid'];
$cnic=$_POST['cnic'];
$contact=$_POST['contact'];
$vehicle=$_POST['vehicle'];
$city=$_POST['city'];
$tax=$_POST['tax'];

$server="localhost";
$username="root";
$password="";
$dbname="test";

$conn=mysqli_connect($server,$username,$password,$dbname);

if(!$conn)
{
    die("connection failed: ".mysqli_connect_error());
}
else
{
$sql="INSERT INTO `booking` (`fullname`, `emailid`, `cnic`, `contact`, `vehicle`, `city`, `tax`)
VALUES ('$fullname', '$email', '$cnic', '$contact', '$vehicle', '$city', '$tax')";
$result=mysqli_query($conn,$sql);

if($result)
{    
echo"<center><h1>The data is inserted successfully<h1></center>";
}

else
{
echo"connection error,the data is not inserted".mysqli_error($conn);
}
}
?>