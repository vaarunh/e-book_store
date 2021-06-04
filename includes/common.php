<?php
    //$con = mysqli_connect("remotemysql.com", "0wOCemB7jz", "KHWw6QdFus", "0wOCemB7jz")
    $con = mysqli_connect("localhost", "root", "", "ecommerce")
    or die(mysqli_error($con));
    if(!isset($_SESSION)){
      session_start();
    }
?>
