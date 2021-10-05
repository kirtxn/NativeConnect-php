<?php
     // connect to database
     include 'connect.php';

     // Get Time
     date_default_timezone_set('Asia/Singapore');
     $timestamp = date("Y-m-d H:i:s");

     // get data on R
     $voltageR = $_GET['voltageR'];
     $currentR = $_GET['currentR'];
     $powerR = $_GET['powerR'];
     $energyR = $_GET['energyR'];
     $frequencyR = $_GET['frequencyR'];
     $pfR = $_GET['pfR'];

     // get data on S
     $voltageS = $_GET['voltageS'];
     $currentS = $_GET['currentS'];
     $powerS = $_GET['powerS'];
     $energyS = $_GET['energyS'];
     $frequencyS = $_GET['frequencyS'];
     $pfS = $_GET['pfS'];

     // get data on T
     $voltageT = $_GET['voltageT'];
     $currentT = $_GET['currentT'];
     $powerT = $_GET['powerT'];
     $energyT = $_GET['energyT'];
     $frequencyT = $_GET['frequencyT'];
     $pfT = $_GET['pfT'];

     // create query
     $sqlR = "INSERT INTO R (voltage, current, power, energy, frequency, pf, created_at) VALUE ('$voltageR', '$currentR', '$powerR', '$energyR', '$frequencyR', '$pfR', '$timestamp')";
     $sqlS = "INSERT INTO S (voltage, current, power, energy, frequency, pf, created_at) VALUE ('$voltageS', '$currentS', '$powerS', '$energyS', '$frequencyS', '$pfS', '$timestamp')";
     $sqlT = "INSERT INTO T (voltage, current, power, energy, frequency, pf, created_at) VALUE ('$voltageT', '$currentT', '$powerT', '$energyT', '$frequencyT', '$pfT', '$timestamp')";
     
     // insert query to database
     $queryR = mysqli_query($connect, $sqlR);
     $queryS = mysqli_query($connect, $sqlS);
     $queryT = mysqli_query($connect, $sqlT);

     // notification
     echo "Nice Info Gan -> " . date("h:i:sa");;

?>