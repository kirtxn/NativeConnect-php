<?php
     include 'connect.php';

     // R
     $voltageR = $_GET['voltageR'];
     $currentR = $_GET['currentR'];
     $powerR = $_GET['powerR'];
     $energyR = $_GET['energyR'];
     $frequencyR = $_GET['frequencyR'];
     $pfR = $_GET['pfR'];

     // S
     $voltageS = $_GET['voltageS'];
     $currentS = $_GET['currentS'];
     $powerS = $_GET['powerS'];
     $energyS = $_GET['energyS'];
     $frequencyS = $_GET['frequencyS'];
     $pfS = $_GET['pfS'];

     // T
     $voltageT = $_GET['voltageT'];
     $currentT = $_GET['currentT'];
     $powerT = $_GET['powerT'];
     $energyT = $_GET['energyT'];
     $frequencyT = $_GET['frequencyT'];
     $pfT = $_GET['pfT'];

     $sqlR = "INSERT INTO R (voltage, current, power, energy, frequency, pf) VALUE ('$voltageR', '$currentR', '$powerR', '$energyR', '$frequencyR', '$pfR')";
     $sqlS = "INSERT INTO S (voltage, current, power, energy, frequency, pf) VALUE ('$voltageS', '$currentS', '$powerS', '$energyS', '$frequencyS', '$pfS')";
     $sqlT = "INSERT INTO T (voltage, current, power, energy, frequency, pf) VALUE ('$voltageT', '$currentT', '$powerT', '$energyT', '$frequencyT', '$pfT')";
     $queryR = mysqli_query($connect, $sqlR);
     $queryS = mysqli_query($connect, $sqlS);
     $queryT = mysqli_query($connect, $sqlT);

     echo "Nice Info Gan -> " . date("h:i:sa");;

?>