<?php

  if (!isset($_SESSION['user'])) {
    echo "<script>alert('Please login first before use the service!');</script>";
    die("<script>window.location.href='login.html'</script>");
  }

 ?>
