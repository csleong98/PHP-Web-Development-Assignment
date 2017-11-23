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

if(mysqli_num_rows($result)<=0) //if no result there
{
    die("<script>alert('No data from database!');</script>");
}

while($rows = mysqli_fetch_array($result))
{
    if($rows['checkInTime'] == $cit)
    {
        echo 'same time';
    }
    else
    {
        echo 'not same';
    }
}
// while ($rows = mysqli_fetch_array($result)) {
//     if($rows['checkInTime'] == $cit) {
//         echo 'same time';
//     }
//     else {
//         echo 'not working';
//     }
// }
// echo $result;

// mysqli_query($conn2, $sql);

// if(mysqli_affected_rows($conn2)<=0)
// {
//     die("<script>alert('Cannot insert data!');</script>");
// }

// echo "<script>alert('Successfully to insert data!');</script>";

// $result = mysqli_query($conn, $sql); //run the sql query
// all the data store in variable result 
// if(mysqli_num_rows($result)<=0) //if no result there
// {
//     die("<script>alert('No data from database!');</script>");
// }
// $result = mysqli_query('conn2,$sql');

// rows = mysqli_fetch_array($result);

// if ($roomname === rows('roomname') 
// echo  "alert 'sorry is booking alr'"
// echo 'die(hitory.go(-1))';
// )


?>