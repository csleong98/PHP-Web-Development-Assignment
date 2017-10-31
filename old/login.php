<?php

  session_start();

  include "connection.php";

  $username = mysqli_real_escape_string($conn, $_POST['user']);
  $password = mysqli_real_escape_string($conn, $_POST['pass']);

  $sql = "SELECT * FROM users WHERE username = '".$username."' AND password = '".md5($password)."';";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result)<=0) {
    echo "<script>alert('Wrong username / password !Please Try Again!');";
    die("window.history.go(-1);</script>");
  }

  if ($row=mysqli_fetch_array($result)) {

    $_SESSION['user'] = $row['username'];
    $_SESSION['password'] = $row['password'];
    $_SESSION['role'] = $row['role'];

  }
  if ($_SESSION['role']==="1") {
    echo "<script>alert('Welcome back! ".$_SESSION['user']."');";
    echo "window.location.href='default.html';</script>";
  }
  else if($_SESSION['role'] ==="0") {
    echo "<script>alert('Welcome back! ".$_SESSION['admin']."');";
    //echo "window.location.href='admin.html';</script>";
  }
  else {
    //echo "window.location.href='login.html';</script>";
  }
 ?>
