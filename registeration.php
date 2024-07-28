<?php
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$email=$_POST['emailid'];
$pass=$_POST['pass'];
$year=$_POST['byear'];
$month=$_POST['bmonth'];
$date=$_POST['bdate'];
$gender=$_POST['gender'];

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
$sql="INSERT INTO `register` (`fname`, `lname`, `emailid`, `pass`, `byear`, `bmonth`, `bdate`, `gender`)
 VALUES ('$firstname','$lastname','$email','$pass','$year','$month','$date','$gender')";
$result=mysqli_query($conn,$sql);

if($result)
{    
?>
<script>
    alert("Registeration Successfull!");
    location.assign("index.php");
</script>
<?php
}

else
{
echo"connection error,the data is not inserted".mysqli_error($conn);
}
}
?>