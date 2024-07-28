<?php
$fullname=$_POST['fullname'];
$email=$_POST['emailid'];
$desc=$_POST['description'];

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
$sql="INSERT INTO `contact` (`fullname`, `emailid`, `description`)
VALUES ('$fullname', '$email', '$desc')";
$result=mysqli_query($conn,$sql);

if($result)
{    
echo"<center><h1>Your Feedback Is Saved Successfully!<h1></center>";
}

else
{
echo"connection error,the data is not inserted".mysqli_error($conn);
}
}
?>