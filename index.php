<?php
include 'connect.php';

$voltage = $_GET['voltage'];
$current = $_GET['current'];
$power = $_GET['power'];
$energy = $_GET['energy'];
$frequency = $_GET['frequency'];
$pf = $_GET['pf'];

$sql = "INSERT INTO R (voltage, current, power, energy, frequency, pf) VALUE ('$voltage', '$current', '$power', '$energy', '$frequency', '$pf')";
$query = mysqli_query($con, $sql);

?>