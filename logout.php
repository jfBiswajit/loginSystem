<?php
  session_start();
  if (!isset($_SERVER['HTTP_REFERER'])) {
    header('location: error.php');
    die();
  } else {
      if (session_destroy()) {
      header('location: signin.php');
      die();
    }
  }
?>