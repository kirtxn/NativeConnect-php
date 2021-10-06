<script>

     var voltage = document.getElementById("chart-voltage").getContext("2d");
     var gradientStroke1 = voltage.createLinearGradient(0, 230, 0, 50);

     gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
     gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
     gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

     var gradientStroke2 = voltage.createLinearGradient(0, 230, 0, 50);

     gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
     gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
     gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

     new Chart(voltage, {
          type: "line",
          data: {
          labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9"],
          datasets: [{
               label: "R",
               tension: 0.4,
               borderWidth: 0,
               pointRadius: 0,
               borderColor: "#cb0c9f",
               borderWidth: 3,
               backgroundColor: gradientStroke1,
               fill: true,
               data: [
                    <?php
					$R = mysqli_query($connect,"SELECT voltage FROM R ORDER BY id DESC LIMIT 1 OFFSET 8");
					while($d=mysqli_fetch_array($R)){
					echo $d['voltage'];
					}
				?>,
                    <?php
					$R = mysqli_query($connect,"SELECT voltage FROM R ORDER BY id DESC LIMIT 1 OFFSET 7");
					while($d=mysqli_fetch_array($R)){
					echo $d['voltage'];
					}
				?>,
                    <?php
					$R = mysqli_query($connect,"SELECT voltage FROM R ORDER BY id DESC LIMIT 1 OFFSET 6");
					while($d=mysqli_fetch_array($R)){
					echo $d['voltage'];
					}
				?>,
                    <?php
					$R = mysqli_query($connect,"SELECT voltage FROM R ORDER BY id DESC LIMIT 1 OFFSET 5");
					while($d=mysqli_fetch_array($R)){
					echo $d['voltage'];
					}
				?>,
                    <?php
					$R = mysqli_query($connect,"SELECT voltage FROM R ORDER BY id DESC LIMIT 1 OFFSET 4");
					while($d=mysqli_fetch_array($R)){
					echo $d['voltage'];
					}
				?>,
                    <?php
					$R = mysqli_query($connect,"SELECT voltage FROM R ORDER BY id DESC LIMIT 1 OFFSET 3");
					while($d=mysqli_fetch_array($R)){
					echo $d['voltage'];
					}
				?>,
                    <?php
					$R = mysqli_query($connect,"SELECT voltage FROM R ORDER BY id DESC LIMIT 1 OFFSET 2");
					while($d=mysqli_fetch_array($R)){
					echo $d['voltage'];
					}
				?>,
                    <?php
					$R = mysqli_query($connect,"SELECT voltage FROM R ORDER BY id DESC LIMIT 1 OFFSET 1");
					while($d=mysqli_fetch_array($R)){
					echo $d['voltage'];
					}
				?>,
                    <?php
					$R = mysqli_query($connect,"SELECT voltage FROM R ORDER BY id DESC LIMIT 1 OFFSET 0");
					while($d=mysqli_fetch_array($R)){
					echo $d['voltage'];
					}
				?>],
               maxBarThickness: 6

               },
               {
               label: "S",
               tension: 0.4,
               borderWidth: 0,
               pointRadius: 0,
               borderColor: "#3A416F",
               borderWidth: 3,
               backgroundColor: gradientStroke2,
               fill: true,
               data: [
                    <?php
					$S = mysqli_query($connect,"SELECT voltage FROM S ORDER BY id DESC LIMIT 1 OFFSET 8");
					while($d=mysqli_fetch_array($S)){
					echo $d['voltage'];
					}
				?>,
                    <?php
					$S = mysqli_query($connect,"SELECT voltage FROM S ORDER BY id DESC LIMIT 1 OFFSET 7");
					while($d=mysqli_fetch_array($S)){
					echo $d['voltage'];
					}
				?>,
                    <?php
					$S = mysqli_query($connect,"SELECT voltage FROM S ORDER BY id DESC LIMIT 1 OFFSET 6");
					while($d=mysqli_fetch_array($S)){
					echo $d['voltage'];
					}
				?>,
                    <?php
					$S = mysqli_query($connect,"SELECT voltage FROM S ORDER BY id DESC LIMIT 1 OFFSET 5");
					while($d=mysqli_fetch_array($S)){
					echo $d['voltage'];
					}
				?>,
                    <?php
					$S = mysqli_query($connect,"SELECT voltage FROM S ORDER BY id DESC LIMIT 1 OFFSET 4");
					while($d=mysqli_fetch_array($S)){
					echo $d['voltage'];
					}
				?>,
                    <?php
					$S = mysqli_query($connect,"SELECT voltage FROM S ORDER BY id DESC LIMIT 1 OFFSET 3");
					while($d=mysqli_fetch_array($S)){
					echo $d['voltage'];
					}
				?>,
                    <?php
					$S = mysqli_query($connect,"SELECT voltage FROM S ORDER BY id DESC LIMIT 1 OFFSET 2");
					while($d=mysqli_fetch_array($S)){
					echo $d['voltage'];
					}
				?>,
                    <?php
					$R = mysqli_query($connect,"SELECT voltage FROM S ORDER BY id DESC LIMIT 1 OFFSET 1");
					while($d=mysqli_fetch_array($R)){
					echo $d['voltage'];
					}
				?>,
                    <?php
					$S = mysqli_query($connect,"SELECT voltage FROM S ORDER BY id DESC LIMIT 1 OFFSET 0");
					while($d=mysqli_fetch_array($S)){
					echo $d['voltage'];
					}
				?>],
               maxBarThickness: 6
               },
               {
               label: "T",
               tension: 0.4,
               borderWidth: 0,
               pointRadius: 0,
               borderColor: "#03FC17",
               borderWidth: 3,
               backgroundColor: gradientStroke2,
               fill: true,
               data: [<?php
					$T = mysqli_query($connect,"SELECT voltage FROM T ORDER BY id DESC LIMIT 1 OFFSET 8");
					while($d=mysqli_fetch_array($T)){
					echo $d['voltage'];
					}
				?>,
                    <?php
					$T = mysqli_query($connect,"SELECT voltage FROM T ORDER BY id DESC LIMIT 1 OFFSET 7");
					while($d=mysqli_fetch_array($T)){
					echo $d['voltage'];
					}
				?>,
                    <?php
					$T = mysqli_query($connect,"SELECT voltage FROM T ORDER BY id DESC LIMIT 1 OFFSET 6");
					while($d=mysqli_fetch_array($T)){
					echo $d['voltage'];
					}
				?>,
                    <?php
					$T = mysqli_query($connect,"SELECT voltage FROM T ORDER BY id DESC LIMIT 1 OFFSET 5");
					while($d=mysqli_fetch_array($T)){
					echo $d['voltage'];
					}
				?>,
                    <?php
					$T = mysqli_query($connect,"SELECT voltage FROM T ORDER BY id DESC LIMIT 1 OFFSET 4");
					while($d=mysqli_fetch_array($T)){
					echo $d['voltage'];
					}
				?>,
                    <?php
					$T = mysqli_query($connect,"SELECT voltage FROM T ORDER BY id DESC LIMIT 1 OFFSET 3");
					while($d=mysqli_fetch_array($T)){
					echo $d['voltage'];
					}
				?>,
                    <?php
					$T = mysqli_query($connect,"SELECT voltage FROM T ORDER BY id DESC LIMIT 1 OFFSET 2");
					while($d=mysqli_fetch_array($T)){
					echo $d['voltage'];
					}
				?>,
                    <?php
					$T = mysqli_query($connect,"SELECT voltage FROM T ORDER BY id DESC LIMIT 1 OFFSET 1");
					while($d=mysqli_fetch_array($T)){
					echo $d['voltage'];
					}
				?>,
                    <?php
					$T = mysqli_query($connect,"SELECT voltage FROM T ORDER BY id DESC LIMIT 1 OFFSET 0");
					while($d=mysqli_fetch_array($T)){
					echo $d['voltage'];
					}
				?>],
               maxBarThickness: 6
               },
          ],
          },
          options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
               legend: {
               display: false,
               }
          },
          interaction: {
               intersect: false,
               mode: 'index',
          },
          scales: {
               y: {
               grid: {
               drawBorder: false,
               display: true,
               drawOnChartArea: true,
               drawTicks: false,
               borderDash: [5, 5]
               },
               ticks: {
               display: true,
               padding: 10,
               color: '#b2b9bf',
               font: {
                    size: 11,
                    family: "Open Sans",
                    style: 'normal',
                    lineHeight: 2
               },
               }
               },
               x: {
               grid: {
               drawBorder: false,
               display: false,
               drawOnChartArea: false,
               drawTicks: false,
               borderDash: [5, 5]
               },
               ticks: {
               display: true,
               color: '#b2b9bf',
               padding: 20,
               font: {
                    size: 11,
                    family: "Open Sans",
                    style: 'normal',
                    lineHeight: 2
               },
               }
               },
          },
          },
     });
</script>