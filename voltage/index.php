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

     <!-- Fonts and icons -->
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
          include "layout/sidebar.php";
     ?>
     <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
          <?php
               include "layout/navbar.php";
               include '../connect.php';
          ?>
          <div class="container-fluid py-4">
               <div class="row mt-4">
                    <div class="col-lg-9">
                         <div class="card z-index-2">
                              <div class="card-header pb-0">
                                   <h6>This Day</h6>
                              </div>
                              <div class="card-body p-3">
                                   <div class="chart">
                                        <canvas id="chart-voltage" class="chart-canvas" height="300"></canvas>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                         <div class="card mb-3">
                              <div class="card-body p-3">
                                   <div class="row">
                                        <div class="col-8">
                                        <div class="numbers">
                                             <p class="text-sm mb-0 text-capitalize font-weight-bold">Now Voltage</p>
                                             <h5 class="font-weight-bolder mb-0">
                                                  <?php
                                                       $R = mysqli_query($connect,"SELECT voltage FROM R ORDER BY id DESC LIMIT 1 OFFSET 0");
                                                            while($d=mysqli_fetch_array($R)){
                                                       echo $d['voltage'];
                                                       }
                                                  ?>
                                                  V
                                                  <!-- <span class="text-success text-sm font-weight-bolder">+55%</span> -->
                                             </h5>
                                        </div>
                                        </div>
                                        <div class="col-4 text-end">
                                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                             <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                        </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="card mb-3">
                              <div class="card-body p-3">
                                   <div class="row">
                                        <div class="col-8">
                                        <div class="numbers">
                                             <p class="text-sm mb-0 text-capitalize font-weight-bold">Max Voltage</p>
                                             <h5 class="font-weight-bolder mb-0">
                                                  <?php
                                                       $R = mysqli_query($connect,"SELECT MAX(voltage) FROM R");
                                                            while($d=mysqli_fetch_array($R)){
                                                       echo $d['MAX(voltage)'];
                                                       }
                                                  ?>
                                                  V
                                                  <!-- <span class="text-success text-sm font-weight-bolder">+55%</span> -->
                                             </h5>
                                        </div>
                                        </div>
                                        <div class="col-4 text-end">
                                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                             <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                        </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="card mb-3">
                              <div class="card-body p-3">
                                   <div class="row">
                                        <div class="col-8">
                                        <div class="numbers">
                                             <p class="text-sm mb-0 text-capitalize font-weight-bold">Min Voltage</p>
                                             <h5 class="font-weight-bolder mb-0">
                                                  <?php
                                                       $R = mysqli_query($connect,"SELECT MIN(voltage) FROM R");
                                                            while($d=mysqli_fetch_array($R)){
                                                       echo $d['MIN(voltage)'];
                                                       }
                                                  ?>
                                                  V
                                                  <!-- <span class="text-success text-sm font-weight-bolder">+55%</span> -->
                                             </h5>
                                        </div>
                                        </div>
                                        <div class="col-4 text-end">
                                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                             <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                        </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="card mb-3">
                              <div class="card-body p-3">
                                   <div class="row">
                                        <div class="col-8">
                                        <div class="numbers">
                                             <p class="text-sm mb-0 text-capitalize font-weight-bold">Average Voltage</p>
                                             <h5 class="font-weight-bolder mb-0">
                                                  <?php
                                                       $R = mysqli_query($connect,"SELECT AVG(voltage) FROM R");
                                                            while($d=mysqli_fetch_array($R)){
                                                       echo $d['AVG(voltage)'];
                                                       }
                                                  ?>
                                                  V
                                                  <!-- <span class="text-success text-sm font-weight-bolder">+55%</span> -->
                                             </h5>
                                        </div>
                                        </div>
                                        <div class="col-4 text-end">
                                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                             <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                        </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               
                    <div class="row mt-4">
                         <?php
                              include "table/R.php";
                              include "table/S.php";
                              include "table/T.php";
                         ?>
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
     
     <?php
          include "chartjs/voltage.php";
          include "chartjs/current.php";
          include "chartjs/power.php";
          include "chartjs/energy.php";
          include "chartjs/frequency.php";
          include "chartjs/pf.php";
     ?>

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
     <script>
          setTimeout(function(){
               window.location.reload(1);
          }, 6000);
     </script>
</body>
</html>