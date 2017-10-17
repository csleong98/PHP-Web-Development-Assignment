<?php
	$conn2 = mysqli_connect("localhost","root","","sign");

	if(mysqli_connect_errno())
	{
		die("<script>alert('Error in connection!');window.history.go(-1);</script>");
	}
	echo "<script>alert('Connection Successfully!');</script>";

?>
