<!DOCTYPE html>
<html>
<head>
	<title>Connect</title>
	<script type="text/javascript" src="node_modules/chart.js/dist/chart.js"></script>
</head>
<body>
<style type="text/css">
body{
	font-family: roboto;
}

table{
	margin: 0px auto;
}
</style>

<?php
	include 'connect.php';
?>

<div style="width: 800px;margin: 0px auto;">
	<canvas id="myChart"></canvas>
</div>

<br/>
<br/>

<table border="1">
	<thead>
	<tr>
		<th>No</th>
		<th>voltage</th>
		<th>current</th>
		<th>power</th>
		<th>energy</th>
		<th>frequency</th>
		<th>pf</th>
	</tr>
	</thead>
	<tbody>
	<?php 
	$no = 1;
	$data = mysqli_query($connect,"select * from R");
	while($d=mysqli_fetch_array($data)){
		?>
		<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['voltage']; ?></td>
		<td><?php echo $d['current']; ?></td>
		<td><?php echo $d['power']; ?></td>
		<td><?php echo $d['energy']; ?></td>
		<td><?php echo $d['frequency']; ?></td>
		<td><?php echo $d['pf']; ?></td>
		</tr>
		<?php 
	}
	?>
	</tbody>
</table>

<script>
	var ctx = document.getElementById("myChart").getContext('2d');
	var myChart = new Chart(ctx, {
	type: 'line',
	data: {
		labels: ["1", "2", "3", "4"],
		datasets: [{
		label: 'Voltage',
		data: [
		<?php
			$test = mysqli_query($connect,"SELECT voltage FROM R ORDER BY id DESC LIMIT 1 OFFSET 3");
			while($d=mysqli_fetch_array($test)){
			echo $d['voltage'];
			}
		?>, 
		<?php
			$test = mysqli_query($connect,"SELECT voltage FROM R ORDER BY id DESC LIMIT 1 OFFSET 2");
			while($d=mysqli_fetch_array($test)){
			echo $d['voltage'];
			}
		?>, 
		<?php
			$test = mysqli_query($connect,"SELECT voltage FROM R ORDER BY id DESC LIMIT 1 OFFSET 1");
			while($d=mysqli_fetch_array($test)){
			echo $d['voltage'];
			}
		?>, 
		<?php
			$test = mysqli_query($connect,"SELECT voltage FROM R ORDER BY id DESC LIMIT 1 OFFSET 0");
			while($d=mysqli_fetch_array($test)){
			echo $d['voltage'];
			}
		?>
		],
		backgroundColor: [
		'rgba(255, 99, 132, 0.2)',
		'rgba(54, 162, 235, 0.2)',
		'rgba(255, 206, 86, 0.2)',
		'rgba(75, 192, 192, 0.2)',
		],
		borderColor: [
		'rgba(255,99,132,1)',
		'rgba(54, 162, 235, 1)',
		'rgba(255, 206, 86, 1)',
		'rgba(75, 192, 192, 1)',
		],
		borderWidth: 1
		}]
	},
	options: {
		scales: {
		yAxes: [{
			ticks: {
			beginAtZero:true
			}
		}]
		}
	}
	});
</script>
</body>
</html>