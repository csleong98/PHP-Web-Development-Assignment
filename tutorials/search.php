<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Search</title>
</head>

<body>


	<form action="search.php" method="post">
	
		<input type="text" name="search_key"/>
		<input type="submit" value="Search"/>
	
	</form>

<?php

	include("connection.php");
	$search_key = isset($_POST['search_key']) ? $_POST['search_key'] : '';
	if ($search_key == NULL)
	{
	echo "Please enter your search key";
	}
	else
	{
	$result = mysqli_query($con,"SELECT * FROM contacts WHERE contact_name LIKE '%" .
	$search_key . "%'");
	
?>
<!--display in html table-->
<table width="90%">
<tr style="background-color:#CC99FF">
<td>Name</td>
<td>Phone Number</td>
<td>Email</td>
<td>Address</td>
<td>Gender</td>
<td>Relationship</td>
<td>DOB</td>
<td>Edit</td>
<td>Delete</td>
</tr>

<?php
while($row = mysqli_fetch_array($result))
{
	echo "<tr bgcolor=\"#99FF66\">";
	
	echo "<td>";
	echo $row['contact_name'];
	echo "</td>";
	
	echo "<td>";
	echo $row['contact_phone'];
	echo "</td>";
	
	echo "<td>";
	echo " <a href=\"mailto:" . $row['contact_email']. "\">". $row['contact_email'] . "</a> ";
	echo "</td>";
	
	echo "<td>";
	echo $row['contact_address'];
	echo "</td>"
	
	echo "<td>";
	echo $row['contact_gender'];
	echo "</td>";
	
	echo "<td>";
	echo $row['contact_relationship'];
	echo "</td>";

	echo "<td>";
	echo $row['contact_dob'];
	echo "</td>";
	
	echo "<td><a href=\"edit.php?id=";
	echo $row['id'];
	echo "\">Edit</a></td>";
	
	echo "<td><a href=\"delete.php?id=";
	echo $row['id'];
	echo "\" onClick=\"return confirm('Delete ";
	echo $row['contact_name'];
	echo " details?');\">Delete</a></td></tr>";
	}
	mysqli_close($con); //to close the database connection
}
?>
</table>

</body>

</html>
