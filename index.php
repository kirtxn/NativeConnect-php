<?php
$con = mysqli_connect("localhost", "spot", "W", "monitor");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$voltage = $_GET['voltage'];
$current = $_GET['current'];
$power = $_GET['power'];
$energy = $_GET['energy'];
$frequency = $_GET['frequency'];
$pf = $_GET['pf'];

$sql = "INSERT INTO R (voltage, current, power, energy, frequency, pf) VALUE ('$voltage', '$current', '$power', '$energy', '$frequency', '$pf')";
$query = mysqli_query($con, $sql);

?>