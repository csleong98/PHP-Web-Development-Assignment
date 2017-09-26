<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Add New Profile</title>
</head>

<style>
td{
text-align:left;
	}
}

</style>

<body>
<h1>My Address Book</h1>
<br/>
<h2>Add New Profile</h2>

	<form action="insert.php" method="post">
	<table style="text-align:right";>
	
		<tr><th>Name: </th><td><input type="text" name="name" required="required"/></td></tr>
		<tr><th>Phone Number: </th><td><input type="tel" name="phone_num" required="required"/></td></tr>
		<tr><th>Email Address: </th><td><input type="email" name="email_address" required="required" /></td></tr>
		<tr><th>Home  Address: </th><td><textarea name="home_address" required="required" ></textarea></td></tr>
		<tr><th>Gender: </th><td><input type="radio" name="gender" value="Male" required="required"/>
								<input type="radio" name="gender" value="Female" required="required"/>
		</td></tr>
		<tr><th>Relationship:</th>
			<td> 
				<select name="relationship" required="required" >
					<option value="">Please select</option>
					<option value="Family">Family</option>
					<option value="Friend">Friend</option>
					<option value="Collegue">Collegue</option>
					<option value="Other">Other</option>
				</select>
			</td>
		</tr>
	<tr><th>Date of Birth: </th><td><input type="date" name="dob" /></td></tr>
	
	</table>
	<br/>
	<input type="submit" value="Submit" />&nbsp;&nbsp;
	<input type="reset" value="reset" />
	</form>

</body>

</html>
