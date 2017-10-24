<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Edit Form</title>
</head>

<body>
<!-- Step 1: use PHP to read database -->

<?php

    /* a. get is from URL */
    $uid = $_GET['id'];
    // b. connect to database 
    include "connection.php";
    //c. write the sql query
    $sql = "SELECT * FROM contacts WHERE id = $uid";
    //d. execute the sql query
    $result = mysqli_query($conn, $sql);
    //e. get the data from the database into array
    if($rows=mysqli_fetch_array($result))
    {
?>
    <!-- Step 2: use HTML Form and PHP to display the resut -->
    <form method="POST" action="update.php">
        <table style="text-align: left;">
            <tr>
                <th width="200px">ID</th>
                <td><input type="text" value="<?php echo $uid;?>" name="uid" readonly></td>
            </tr>
            <tr>
                <th>Name:</th>
                <td width"300px">
                    <input type="text" name="name" value="<?php echo $rows['contact_name']?>" require>
                </td>
            </tr>
            <tr>
                <th>Phone:</th>
                <td>
                    <input type="text" name="phone" value="<?php echo $rows['contact_phone']?>" require>
                </td>
            </tr>
            <tr>
                <th>Email:</th>
                <td>
                    <input type="text" name="email" value="<?php echo $rows['contact_email']?>" require>
                </td>
            </tr>
            <tr>
                <th>Gender:</th>
                <td>
                    <input type="radio" name="gender" value="Male" <?php if($rows['contact_gender'] == "Male") echo "checked"?> require>Male
                    <input type="radio" name="gender" value="Female" <?php if($rows['contact_gender'] == "Female") echo "checked"?> require>Female
                </td>
            </tr>
            <tr>
                <th>Relationship:</th>
                <td>
                   <select name="relationship" require>
                       <option value="">Please select</option>
                       <option value="Family" <?php if ($rows['contact_relationship'] == "Family") echo "selected"?>>Family</option>
                       <option value="Friend" <?php if ($rows['contact_relationship'] == "Friend") echo "selected"?>>Friend</option>
                       <option value="Colleague" <?php if ($rows['contact_relationship'] == "Colleague") echo "selected"?>>Colleague</option>
                       <option value="Other" <?php if ($rows['contact_relationship'] == "Other") echo "selected"?>>Other</option>
                   </select>
                </td>
            </tr>
            <tr>
                <th>Date of Birth:</th>
                <td>
                    <input type="date" name="date" value="<?php echo $rows['contact_dob']?>" require>
                </td>
            </tr>
        </table>
    </form>
</body>
<?php 
    }
    else
    {
        die("<script>alert('No such user'); window.location.href='view.php'</script>");
    }
?>
</html>
