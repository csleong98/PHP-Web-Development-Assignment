<?php
		$uid = $_GET['id']; //from the url id=1
		/**start the delete contact stage
		1. connect to database
		2. write sql query
		3. execute the sql query
		4. check for the result from the sql query
		5. incorrect - come out error message
		6. correct - success message
		7. end.. transfer back to view.php
		**/
		include("connection.php");
		$sql = "DELETE FROM contacts WHERE id=$uid";
		mysqli_query($conn, $sql);
		if(mysqli_affected_rows($conn)<=0)
		{
			echo "<script>alert('Unable to delete data!');";
			die ("window.location.href='view.php';</script>");
		}
?>