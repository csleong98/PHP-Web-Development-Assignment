<?php 
$con=mysqli_connect("localhost","root","","myaddressbook");

//check connection
if(mysqli_connect_errno())
{
echo "Failed to connect to MySQL: ". mysqli_connect_error();
}else
{
echo "<script>alert('connected to localhost:8080 server!')</script>";
}



?>