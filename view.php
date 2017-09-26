<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>view</title>
  </head>
  <body>
    <table width="90%">
    <tr bgcolor="#CC99FF">
      <th>Test</th>
    <th>Name</th>
    <th>Phone Number</th>
    <th>Email</th>
    <th>Address</th>
    <th>Gender</th>
    <th>Relationship</th>
    <th>DOB</th>
    <th>Edit</th>
    <th>Delete</th>

        <?php

        include("conn.php");
        if(!mysqli_query($con,$sql))
        {
        die( "error: ". mysql_error($con));
        }
        $result = mysqli_query($con, "SELECT * FROM contacts");

          while ($row = mysqli_fetch_array($result)) {

            echo "<tr>";
            echo "<td>".$row['contact_name']."</td>";
            echo "<td>".$row['contact_phone']."</td>";
            echo "<td>".$row['contact_email']."</td>";
            echo "<td>".$row['contact_address']."</td>";
            echo "<td>".$row['contact_gender']."</td>";
            echo "<td>".$row['contact_relationship']."</td>";
            echo "<td>".$row['contact_dob']."</td>";
            echo "<td><a href='edit.php?id=".$rows['id']."'>";
            echo "<button>Edit</button></a></td>";
            echo "</tr>";
          }
            mysql_close($con); //close connecttion

         ?>

       </table>
  </body>
</html>
