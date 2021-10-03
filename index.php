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
			type: 'bar',
			data: {
				labels: ["voltage", "current", "power", "energy", "frequency", "pf"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$voltage = mysqli_query($connect,"select voltage from R");
					echo mysqli_num_rows($voltage);
					?>, 
					<?php 
					$current = mysqli_query($connect,"select current from R");
					echo mysqli_num_rows($current);
					?>, 
					<?php 
					$power = mysqli_query($connect,"select power from R");
					echo mysqli_num_rows($power);
					?>, 
					<?php 
					$energy = mysqli_query($connect,"select energy from R");
					echo mysqli_num_rows($energy);
					?>
          <?php 
					$frequency = mysqli_query($connect,"select * from R where fakultas='pertanian'");
					echo mysqli_num_rows($frequency);
					?>
          <?php 
					$pf = mysqli_query($connect,"select pf from R where fakultas='pertanian'");
					echo mysqli_num_rows($pf);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(75, 192, 192, 1)'
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