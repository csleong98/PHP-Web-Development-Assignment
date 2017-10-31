<?php
	$conn = mysqli_connect("localhost","root","","myaddressbook");
	
	if(mysqli_connect_errno())
	{
		die("<script>alert('Error in connection!');window.history.go(-1);</script>");
	}
	echo "<script>alert('Connection Successfully!');</script>";

?>