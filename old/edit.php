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
    $result = mysql_query($conn, $sql);
    //e. get the data from the database into array

?>
<!-- Step 2: use HTML Form and PHP to display the resut -->
</body>

</html>
