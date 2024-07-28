
<?php
$severname="localhost";
$username="root";
$password="";
$dbname="test";

$conn=mysqli_connect($severname,$username,$password,$dbname);

if(!$conn)
{
?>
<script>
    alert("Connection Failed");
</script>        
<?php
    die(mysqli_connect_error());
}
else
{
?>
<script>
    alert("Connection Succeeded");
</script>
<?php
}   
?>