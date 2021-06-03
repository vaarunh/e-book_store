<?php
    $con = mysqli_connect("remotemysql.com", "varun", "varun@123", "0wOCemB7jz")
    or die(mysqli_error($con));
    if(!isset($_SESSION)){
      session_start();
    }
?>
