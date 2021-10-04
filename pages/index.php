<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
     <link rel="icon" type="image/png" href="../assets/img/favicon.png">
     <title>
          Connect
     </title>

     <!--     Fonts and icons     -->
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
     <!-- Nucleo Icons -->

     <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
     <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
     <!-- Font Awesome Icons -->

     <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
     <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
     <!-- CSS Files -->

     <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">
     <?php
          include "../layout/sidebar.php";
     ?>
     <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
          <?php
          include "../layout/navbar.php";
     ?>
     <?php
          include '../connect.php';
     ?>
          <div class="container-fluid py-4">
               <div class="row mt-4">
                    <div class="col-lg-12">
                         <div class="card z-index-2">
                              <div class="card-header pb-0">
                                   <h6>Voltage</h6>
                              </div>
                              <div class="card-body p-3">
                                   <div class="chart">
                                        <canvas id="chart-voltage" class="chart-canvas" height="300"></canvas>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <div class="container-fluid py-4">
               <div class="row mt-4">
                    <div class="col-lg-12">
                         <div class="card z-index-2">
                              <div class="card-header pb-0">
                                   <h6>Current</h6>
                              </div>
                              <div class="card-body p-3">
                                   <div class="chart">
                                        <canvas id="chart-current" class="chart-canvas" height="300"></canvas>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </main>
     
     <!--   Core JS Files   -->
     <script src="../assets/js/core/popper.min.js"></script>
     <script src="../assets/js/core/bootstrap.min.js"></script>
     <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
     <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
     <script src="../assets/js/plugins/chartjs.min.js"></script>
     <script>

     var ctx2 = document.getElementById("chart-voltage").getContext("2d");
     var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

     gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
     gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
     gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

     var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

     gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
     gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
     gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

     new Chart(ctx2, {
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
					$R = mysqli_query($connect,"SELECT voltage FROM S ORDER BY id DESC LIMIT 1 OFFSET 8");
					while($d=mysqli_fetch_array($R)){
					echo $d['voltage'];
					}
				?>,
                    <?php
					$R = mysqli_query($connect,"SELECT voltage FROM S ORDER BY id DESC LIMIT 1 OFFSET 7");
					while($d=mysqli_fetch_array($R)){
					echo $d['voltage'];
					}
				?>,
                    <?php
					$R = mysqli_query($connect,"SELECT voltage FROM S ORDER BY id DESC LIMIT 1 OFFSET 6");
					while($d=mysqli_fetch_array($R)){
					echo $d['voltage'];
					}
				?>,
                    <?php
					$R = mysqli_query($connect,"SELECT voltage FROM S ORDER BY id DESC LIMIT 1 OFFSET 5");
					while($d=mysqli_fetch_array($R)){
					echo $d['voltage'];
					}
				?>,
                    <?php
					$R = mysqli_query($connect,"SELECT voltage FROM S ORDER BY id DESC LIMIT 1 OFFSET 4");
					while($d=mysqli_fetch_array($R)){
					echo $d['voltage'];
					}
				?>,
                    <?php
					$R = mysqli_query($connect,"SELECT voltage FROM S ORDER BY id DESC LIMIT 1 OFFSET 3");
					while($d=mysqli_fetch_array($R)){
					echo $d['voltage'];
					}
				?>,
                    <?php
					$R = mysqli_query($connect,"SELECT voltage FROM S ORDER BY id DESC LIMIT 1 OFFSET 2");
					while($d=mysqli_fetch_array($R)){
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
					$R = mysqli_query($connect,"SELECT voltage FROM S ORDER BY id DESC LIMIT 1 OFFSET 0");
					while($d=mysqli_fetch_array($R)){
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
               borderColor: "##FFFFFF",
               borderWidth: 3,
               backgroundColor: gradientStroke2,
               fill: true,
               data: [<?php
					$R = mysqli_query($connect,"SELECT voltage FROM T ORDER BY id DESC LIMIT 1 OFFSET 8");
					while($d=mysqli_fetch_array($R)){
					echo $d['voltage'];
					}
				?>,
                    <?php
					$R = mysqli_query($connect,"SELECT voltage FROM T ORDER BY id DESC LIMIT 1 OFFSET 7");
					while($d=mysqli_fetch_array($R)){
					echo $d['voltage'];
					}
				?>,
                    <?php
					$R = mysqli_query($connect,"SELECT voltage FROM T ORDER BY id DESC LIMIT 1 OFFSET 6");
					while($d=mysqli_fetch_array($R)){
					echo $d['voltage'];
					}
				?>,
                    <?php
					$R = mysqli_query($connect,"SELECT voltage FROM T ORDER BY id DESC LIMIT 1 OFFSET 5");
					while($d=mysqli_fetch_array($R)){
					echo $d['voltage'];
					}
				?>,
                    <?php
					$R = mysqli_query($connect,"SELECT voltage FROM T ORDER BY id DESC LIMIT 1 OFFSET 4");
					while($d=mysqli_fetch_array($R)){
					echo $d['voltage'];
					}
				?>,
                    <?php
					$R = mysqli_query($connect,"SELECT voltage FROM T ORDER BY id DESC LIMIT 1 OFFSET 3");
					while($d=mysqli_fetch_array($R)){
					echo $d['voltage'];
					}
				?>,
                    <?php
					$R = mysqli_query($connect,"SELECT voltage FROM T ORDER BY id DESC LIMIT 1 OFFSET 2");
					while($d=mysqli_fetch_array($R)){
					echo $d['voltage'];
					}
				?>,
                    <?php
					$R = mysqli_query($connect,"SELECT voltage FROM T ORDER BY id DESC LIMIT 1 OFFSET 1");
					while($d=mysqli_fetch_array($R)){
					echo $d['voltage'];
					}
				?>,
                    <?php
					$R = mysqli_query($connect,"SELECT voltage FROM T ORDER BY id DESC LIMIT 1 OFFSET 0");
					while($d=mysqli_fetch_array($R)){
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

     <script>

     var current = document.getElementById("chart-current").getContext("2d");
     var gradientStroke1 = current.createLinearGradient(0, 230, 0, 50);

     gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
     gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
     gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

     var gradientStroke2 = current.createLinearGradient(0, 230, 0, 50);

     gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
     gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
     gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

     new Chart(current, {
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
                         $R = mysqli_query($connect,"SELECT current FROM R ORDER BY id DESC LIMIT 1 OFFSET 8");
                         while($d=mysqli_fetch_array($R)){
                         echo $d['current'];
                         }
                    ?>,
                    <?php
                         $R = mysqli_query($connect,"SELECT current FROM R ORDER BY id DESC LIMIT 1 OFFSET 7");
                         while($d=mysqli_fetch_array($R)){
                         echo $d['current'];
                         }
                    ?>,
                    <?php
                         $R = mysqli_query($connect,"SELECT current FROM R ORDER BY id DESC LIMIT 1 OFFSET 6");
                         while($d=mysqli_fetch_array($R)){
                         echo $d['current'];
                         }
                    ?>,
                    <?php
                         $R = mysqli_query($connect,"SELECT current FROM R ORDER BY id DESC LIMIT 1 OFFSET 5");
                         while($d=mysqli_fetch_array($R)){
                         echo $d['current'];
                         }
                    ?>,
                    <?php
                         $R = mysqli_query($connect,"SELECT current FROM R ORDER BY id DESC LIMIT 1 OFFSET 4");
                         while($d=mysqli_fetch_array($R)){
                         echo $d['current'];
                         }
                    ?>,
                    <?php
                         $R = mysqli_query($connect,"SELECT current FROM R ORDER BY id DESC LIMIT 1 OFFSET 3");
                         while($d=mysqli_fetch_array($R)){
                         echo $d['current'];
                         }
                    ?>,
                    <?php
                         $R = mysqli_query($connect,"SELECT current FROM R ORDER BY id DESC LIMIT 1 OFFSET 2");
                         while($d=mysqli_fetch_array($R)){
                         echo $d['current'];
                         }
                    ?>,
                    <?php
                         $R = mysqli_query($connect,"SELECT current FROM R ORDER BY id DESC LIMIT 1 OFFSET 1");
                         while($d=mysqli_fetch_array($R)){
                         echo $d['current'];
                         }
                    ?>,
                    <?php
                         $R = mysqli_query($connect,"SELECT current FROM R ORDER BY id DESC LIMIT 1 OFFSET 0");
                         while($d=mysqli_fetch_array($R)){
                         echo $d['current'];
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
                         $R = mysqli_query($connect,"SELECT current FROM S ORDER BY id DESC LIMIT 1 OFFSET 8");
                         while($d=mysqli_fetch_array($R)){
                         echo $d['current'];
                         }
                    ?>,
                    <?php
                         $R = mysqli_query($connect,"SELECT current FROM S ORDER BY id DESC LIMIT 1 OFFSET 7");
                         while($d=mysqli_fetch_array($R)){
                         echo $d['current'];
                         }
                    ?>,
                    <?php
                         $R = mysqli_query($connect,"SELECT current FROM S ORDER BY id DESC LIMIT 1 OFFSET 6");
                         while($d=mysqli_fetch_array($R)){
                         echo $d['current'];
                         }
                    ?>,
                    <?php
                         $R = mysqli_query($connect,"SELECT current FROM S ORDER BY id DESC LIMIT 1 OFFSET 5");
                         while($d=mysqli_fetch_array($R)){
                         echo $d['current'];
                         }
                    ?>,
                    <?php
                         $R = mysqli_query($connect,"SELECT current FROM S ORDER BY id DESC LIMIT 1 OFFSET 4");
                         while($d=mysqli_fetch_array($R)){
                         echo $d['current'];
                         }
                    ?>,
                    <?php
                         $R = mysqli_query($connect,"SELECT current FROM S ORDER BY id DESC LIMIT 1 OFFSET 3");
                         while($d=mysqli_fetch_array($R)){
                         echo $d['current'];
                         }
                    ?>,
                    <?php
                         $R = mysqli_query($connect,"SELECT current FROM S ORDER BY id DESC LIMIT 1 OFFSET 2");
                         while($d=mysqli_fetch_array($R)){
                         echo $d['current'];
                         }
                    ?>,
                    <?php
                         $R = mysqli_query($connect,"SELECT current FROM S ORDER BY id DESC LIMIT 1 OFFSET 1");
                         while($d=mysqli_fetch_array($R)){
                         echo $d['current'];
                         }
                    ?>,
                    <?php
                         $R = mysqli_query($connect,"SELECT current FROM S ORDER BY id DESC LIMIT 1 OFFSET 0");
                         while($d=mysqli_fetch_array($R)){
                         echo $d['current'];
                         }
                    ?>],
               maxBarThickness: 6
               },
               {
               label: "T",
               tension: 0.4,
               borderWidth: 0,
               pointRadius: 0,
               borderColor: "##FFFFFF",
               borderWidth: 3,
               backgroundColor: gradientStroke2,
               fill: true,
               data: [<?php
                         $R = mysqli_query($connect,"SELECT current FROM T ORDER BY id DESC LIMIT 1 OFFSET 8");
                         while($d=mysqli_fetch_array($R)){
                         echo $d['current'];
                         }
                    ?>,
                    <?php
                         $R = mysqli_query($connect,"SELECT current FROM T ORDER BY id DESC LIMIT 1 OFFSET 7");
                         while($d=mysqli_fetch_array($R)){
                         echo $d['current'];
                         }
                    ?>,
                    <?php
                         $R = mysqli_query($connect,"SELECT current FROM T ORDER BY id DESC LIMIT 1 OFFSET 6");
                         while($d=mysqli_fetch_array($R)){
                         echo $d['current'];
                         }
                    ?>,
                    <?php
                         $R = mysqli_query($connect,"SELECT current FROM T ORDER BY id DESC LIMIT 1 OFFSET 5");
                         while($d=mysqli_fetch_array($R)){
                         echo $d['current'];
                         }
                    ?>,
                    <?php
                         $R = mysqli_query($connect,"SELECT current FROM T ORDER BY id DESC LIMIT 1 OFFSET 4");
                         while($d=mysqli_fetch_array($R)){
                         echo $d['current'];
                         }
                    ?>,
                    <?php
                         $R = mysqli_query($connect,"SELECT current FROM T ORDER BY id DESC LIMIT 1 OFFSET 3");
                         while($d=mysqli_fetch_array($R)){
                         echo $d['current'];
                         }
                    ?>,
                    <?php
                         $R = mysqli_query($connect,"SELECT current FROM T ORDER BY id DESC LIMIT 1 OFFSET 2");
                         while($d=mysqli_fetch_array($R)){
                         echo $d['current'];
                         }
                    ?>,
                    <?php
                         $R = mysqli_query($connect,"SELECT current FROM T ORDER BY id DESC LIMIT 1 OFFSET 1");
                         while($d=mysqli_fetch_array($R)){
                         echo $d['current'];
                         }
                    ?>,
                    <?php
                         $R = mysqli_query($connect,"SELECT current FROM T ORDER BY id DESC LIMIT 1 OFFSET 0");
                         while($d=mysqli_fetch_array($R)){
                         echo $d['current'];
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

     <script>
     var win = navigator.platform.indexOf('Win') > -1;
     if (win && document.querySelector('#sidenav-scrollbar')) {
          var options = {
          damping: '0.5'
          }
          Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
     }
     </script>
     <!-- Github buttons -->
     <script async defer src="https://buttons.github.io/buttons.js"></script>
     <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
     <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>