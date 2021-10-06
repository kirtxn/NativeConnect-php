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
                    <div class="col-lg-12">
                         <div class="card z-index-2">
                              <div class="card-header pb-0">
                                   <h6>This Day</h6>
                              </div>
                              <div class="card-body p-3">
                                   <div class="chart">
                                        <canvas id="chart-energy" class="chart-canvas" height="300"></canvas>
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
               <footer class="footer pt-3  ">
                    <div class="container-fluid">
                         <div class="row align-items-center justify-content-lg-between">
                              <div class="col-lg-6 mb-lg-0 mb-4">
                                   <div class="copyright text-center text-sm text-muted text-lg-start">
                                        © <script>
                                        document.write(new Date().getFullYear())
                                        </script>,
                                        made with <i class="fa fa-heart"></i> by
                                        <a href="https://www.bukanspot.com" class="font-weight-bold" target="_blank">Everyone</a>
                                        for a better web.
                                   </div>
                              </div>
                         </div>
                    </div>
               </footer>
          </div>
     </main>
     
     <!--   Core JS Files   -->
     <script src="../assets/js/core/popper.min.js"></script>
     <script src="../assets/js/core/bootstrap.min.js"></script>
     <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
     <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
     <script src="../assets/js/plugins/chartjs.min.js"></script>
     
     <?php
          include "../chartjs/energy.php";
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