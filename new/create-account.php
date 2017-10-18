<?php
	include "connection2.php";

	$firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password2 = $_POST['confirmpassword'];

    $sql="INSERT INTO users(firstname, lastname, email, password)
  	values('$firstname','$lastname','$email','$password');";

    if ($password == $password2){

      mysqli_query($conn2,$sql);


    	echo "<script>alert('Successfully to insert data!');</script>";

			header("location: signup.php");

    	}

			else
			{
  		echo "<script>alert('Password does not match');</script>";
}
?>
