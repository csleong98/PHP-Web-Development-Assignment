<?php

  session_start();
  echo "<script>alert('Goodbye!".$_SESSION['user']."');</script>";

  session_destroy();
  echo "<script>window.location.href='../index.html'</script>";

 ?>
