<?php
	include "connection2.php";

	$firstname = mysqli_real_escape_string($conn2, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($conn2, $_POST['lastname']);
  $email = mysqli_real_escape_string($conn2, $_POST['email']);
  $password = mysqli_real_escape_string($conn2, $_POST['password']);
  $password2 = mysqli_real_escape_string($conn2, $_POST['confirmpassword']);


	if ($password !== $password2) {
		echo "<script>alert('Password and confirmed password not match.');";
		die("window.history.go(-1);</script>");
	}

    $sql="INSERT INTO users(firstname, lastname, email, password) ".
  	"values ('$firstname','$lastname','$email','".md5($password)."');";

      mysqli_query($conn2,$sql);
    	echo "<script>alert('Successfully to insert data!');</script>";

			header("location: signup.php");

?>
