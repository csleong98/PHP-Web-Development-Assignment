<?php
	include "php/connection.php";

	$username = mysqli_real_escape_string($conn2, $_POST['username']);
  $email = mysqli_real_escape_string($conn2, $_POST['email']);
  $password = mysqli_real_escape_string($conn2, $_POST['password']);
  $password2 = mysqli_real_escape_string($conn2, $_POST['confirmpassword']);

	if ($password !== $password2) {
		echo "<script>alert('Password and confirmed password not match.');";
		die("window.history.go(-1);</script>");
	}

    $sql="INSERT INTO users(username, email, password, register_date) ".
  	"values ('$username', '$email','".md5($password)."', Now();";

			mysqli_query($conn2,$sql);
			
			if (mysqli_affected_rows($conn2)<=0) {
				echo "<script>alert('Unable to register ! \\nPlease Try Again!');";
				die("window.history.go(-1);</script>");			
			}

			echo "<script>alert('Register Successfully! Please login now!');";
			echo "window.location.href='index.html';</script>";

?>
