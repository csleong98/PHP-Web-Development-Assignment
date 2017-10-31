<?php 

    //Step 1: read all the update information from edit.php using $_POST method
    $uid = $_POST['uid'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $home = $_POST['home_address'];
    $gender = $_POST['gender'];
    $relationship = $_POST['relationship'];
    $dob = $_POST['dob'];

    //Step 2: connect to database
    include "connection.php";

    //Step 3: Make the update slq query
    $sql = "UPDATE contacts SET ".
    "contact_name = '$name',".
    "contact_phone = '$phone',".
    "contact_address = '$home',".
    "contact_gender = '$gender',".
    "contact_relationship = '$relationship',".
    "contact_dob = '$dob' WHERE id = $uid";

    //Step 4: Run the sql query
    mysqli_query($conn, $sql);

    //Step 5: Check the query successfully or not
    if(mysqli_affected_rows($conn)<=0)
    {
        echo "<script>alert('No data updated!');</script>";
        die("<script>window.location.href='edit.php?id=$uid';</script>");
    }
        //Step 6: If success alert the success message and go back to the edit.php page
        echo "<script>alert('Successfully to update data!');</script>";
        echo "<script>window.location.href='edit.php?id=$uid';</script>";
    
?>

  