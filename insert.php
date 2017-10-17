<?php
	include "connection.php";
	
	$name = $_POST['text'];
	$phone = $_POST['tel'];
	$email = $_POST['email'];
	$home = $_POST['address'];
	$gender = $_POST['gender'];
	$relationship = $_POST['relationship'];
	$dob = $_POST['date'];
	
	
	$sql="INSERT INTO contacts(contact_name,contact_phone,contact_email, ".
	"contact_address,contact_gender,contact_relationship,contact_dob) values('$name','$phone','$email','$home','$gender','$relationship','$dob');";
	
	mysqli_query($conn,$sql);
	
	if(mysqli_affected_rows($conn)<=0)
	{
		die("<script>alert('Cannot insert data!');</script>");
	}
	
	echo "<script>alert('Successfully to insert data!');</script>";
	
?>