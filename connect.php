<?php
$name=$_POST['st_name'];
$email=$_POST['st_email'];
$pass=$_POST['st_pass'];
$age=$_POST['st_age'];

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
$sql="INSERT INTO `students` (`st_name`, `st_email`, `st_pass`, `st_age`) VALUES ('$name', '$email', '$pass', '$age')";
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