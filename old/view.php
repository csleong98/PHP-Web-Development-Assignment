<?php 
	include("connection.php"); 
	$sql = "Select * from contacts";

?>
<!--display in html table-->
<table border="1" style="text-align: center">
<tr bgcolor="#CC99FF">
<th>Name</th>
<th>Phone Number</th>
<th>Email</th>
<th>Address</th>
<th>Gender</th>
<th>Relationship</th>
<th>DOB</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php
	$result = mysqli_query($conn, $sql); //run the sql query
	// all the data store in variable result 
	if(mysqli_num_rows($result)<=0) //if no result there
	{
		die("<script>alert('No data from database!');</script>");
	}
	// if got result, extract the data one by one column
	while($rows = mysqli_fetch_array($result))
	{
		echo"<tr>";
		echo"<td>".$rows['contact_name']."</td>";
		echo"<td>".$rows['contact_phone']."</td>";
		echo"<td>".$rows['contact_email']."</td>";
		echo"<td>".$rows['contact_address']."</td>";
		echo"<td>".$rows['contact_gender']."</td>";
		echo"<td>".$rows['contact_relationship']."</td>";
		echo"<td>".$rows['contact_dob']."</td>";
		
		echo"<td><a href='edit.php?id=".$rows['id']."'>";
		echo"<button>Edit</button></a></td>";
		
			echo"<td><a href='delete.php?id=".$rows['id']."'>";
		
		echo"<button>Delete</button></a></td>";

		echo"</tr>";
	}
?>
</table>