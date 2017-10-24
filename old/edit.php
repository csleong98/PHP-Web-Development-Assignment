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
    if($rows=mysqli_fetch_array($result));
    {
?>
    <!-- Step 2: use HTML Form and PHP to display the resut -->
    <form method="POST" action="update.php">
        <table>
            <tr>
                <th width="200px">ID</th>
                <td><input type="text" value="<?php echo $uid;?>" name="uid" readonly></td>
            </tr>
            <tr>
                <th>Name:</th>
                <td widt"300px">
                    <input type="text" name="name" value="<?php echo $rows['contact_name']?>" require>
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
