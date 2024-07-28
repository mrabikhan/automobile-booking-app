<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Get Price</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
<link rel="stylesheet" href="css/styles1.css">

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

<div class="background">
<img src="images/c1.jpg">
</div>
<div class="tab">
<table>   
<thead>
<tr> 
<th>Serial</th>
<th>Vehicle Name</th>
<th>Vehicle Type</th>
<th>Vehicle Variant</th>
<th>Vehicle Price</th>
</tr>
<thead>

<tbody>
 <?php   
include 'connection.php';
$sql="select * from `price`";
$result=mysqli_query($conn,$sql);  
while($rows=mysqli_fetch_assoc($result))
{  
?>             
<tr>
<td><?php echo $rows['sno']; ?></td>
<td><?php echo $rows['vehicle_name']; ?></td>
<td><?php echo $rows['vehicle_type']; ?></td>
<td><?php echo $rows['vehicle_variant']; ?></td>
<td><?php echo $rows['vehicle_price']; ?></td>
</tr>
<?php
} 
?>   
</tbody>
</table>
</div>   
</body>
</html>
