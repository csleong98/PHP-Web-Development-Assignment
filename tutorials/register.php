<?php

  include "connection.php";

  //retrieve data from from register.html
  $username = mysqli_real_escape_string($conn, $_POST['user']);
  $password = mysqli_real_escape_string($conn, $_POST['pass']);
  $confirmpassword = mysqli_real_escape_string($conn, $_POST['confirmpass']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);

  if ($password !== $confirmpassword) {
    echo "<script>alert('Password and confirmed password not match.');";
    die("window.history.go(-1);</script>");
  }

include "fileupload.php";

  $sql = "INSERT into USERS (username, password, email, register_date, photolink) ".
  "VALUES ('$username','".md5($password)."','$email',Now(), '$newfilename');";
  mysqli_query($conn, $sql);

  //echo $sql;
  if (mysqli_affected_rows($conn)<=0) {
    echo "<script>alert('Unable to register ! \\nPlease Try Again!');";
    die("window.history.go(-1);</script>");
  }
  include "email.php";
  echo "<script>alert('Register Successfully! Please login now!');";
  echo "window.location.href='login.html';</script>";
 ?>
