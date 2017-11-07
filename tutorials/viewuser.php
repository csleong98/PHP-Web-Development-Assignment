<?php 
	include("connection.php"); 
	$sql = "Select * from users";

?>
<!--display in html table-->
<table border="1" style="text-align: center">
<tr bgcolor="#CC99FF">
<th>UserID</th>
<th>Username</th>
<th>Email</th>
<th>Role</th>
<th>Registered Date</th>
<th>Photo</th>
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
		echo"<td>".$rows['UserID']."</td>";
		echo"<td>".$rows['username']."</td>";
        echo"<td>".$rows['email']."</td>";
        if(intval($rows['role']) === 1)
        {
            $status = "normal user";
        }
        else 
        {
            $status = "admin";
        }
		echo"<td>".$status."</td>";
		echo"<td>".$rows['register_date']."</td>";
		echo"<td><img src='".$rows['photolink']."' width='200px' height='100px'/></td>";
		
		echo"<td><a href='edit.php?id=".$rows['UserID']."'>";
		echo"<button>Edit</button></a></td>";
		
		echo"<td><a href='delete.php?id=".$rows['UserID']."'>";
		echo"<button>Delete</button></a></td>";

		echo"</tr>";
	}
?>
</table>