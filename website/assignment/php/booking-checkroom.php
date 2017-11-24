<?php

session_start();

include('../php/connection.php');

$username = mysqli_real_escape_string($conn2,$_SESSION['user']);

$roomname =  mysqli_real_escape_string($conn2, $_POST['room']);
$cit = mysqli_real_escape_string($conn2, $_POST['check-in-time']);
$cot = mysqli_real_escape_string($conn2, $_POST['check-out-time']);

$days = mysqli_real_escape_string($conn2, $_POST['days']);
$totalprice = mysqli_real_escape_string($conn2, $_POST['totalprice']);

$sql = "INSERT INTO rooms(bookedUser,roomName,checkInTime,". "checkOutTime,days,totalprice,bookDay) values ('$username','$roomname','$cit','$cot','$days','$totalprice',Now());";

$sql2 = "SELECT * FROM rooms WHERE roomName='$roomname'";

$result = mysqli_query($conn2, $sql2);

// if(mysqli_num_rows($result)<=0) //if no result there
// {
//     die("<script>alert('No data from database!');</script>");
// }

while($rows = mysqli_fetch_array($result))
{
    if($rows['checkInTime']==$cit) 
    {
        echo "<script>alert('This date has been booked by other guest.\\nPlease choose another date.');";
        die("window.history.go(-1);</script>");   
        
    }
    else if ($rows['checkOutTime']==$cot) 
    {
        echo "<script>alert('This date has been booked by other guest.\\nPlease choose another date.');";
        die("window.history.go(-1);</script>");           
    }
    else
    {
        mysqli_query($conn2, $sql);
        echo "<script>alert('Booking Successful!');";
        die("window.history.go(-1);</script>");   
    }
}

?>