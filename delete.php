<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Php Delete</title>
  </head>
  <body>
    <?php

      include("conn.php");

      //intval = Get the integer value of a variable
      $id = intval($_GET['id']);

      $result = mysqli_query($con, "DELETE FROM contacts WHERE id=$id");

      mysql_close($con); //close connection
      header('Location: view.php');
      

     ?>
  </body>
</html>
