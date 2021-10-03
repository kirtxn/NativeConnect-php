<?php
     $connect = mysqli_connect("localhost", "spot", "W", "monitor");

     // Check connection
     if (mysqli_connect_errno()) {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
     exit();
   }
?>