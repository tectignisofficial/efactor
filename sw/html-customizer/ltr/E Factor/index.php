<?php 
session_start();
include("include/config.php");?>
<!DOCTYPE html>
<!--
Template Name: Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template
Author: PixInvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://1.envato.market/vuexy_admin
Renew Support: https://1.envato.market/vuexy_admin
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
  <meta name="description"
    content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords"
    content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="PIXINVENT">
  <title>Dashboard E Factor</title>
  <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
    rel="stylesheet">

  <!-- BEGIN: Vendor CSS-->
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/charts/apexcharts.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/toastr.min.css">
  <!-- END: Vendor CSS-->

  <!-- BEGIN: Theme CSS-->
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/bordered-layout.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.min.css">

  <!-- BEGIN: Page CSS-->
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/dashboard-ecommerce.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/charts/chart-apex.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/extensions/ext-component-toastr.min.css">
  <!-- END: Page CSS-->

  <!-- BEGIN: Custom CSS-->
  <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
  <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
  data-menu="vertical-menu-modern" data-col="">

  <?php include("include/header.php");?>

  <?php include("include/sidebar.php");?>

  <!-- BEGIN: Content-->
  <div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <!-- Dashboard Ecommerce Starts -->
        <section id="dashboard-ecommerce">
          <div class="row match-height">
            <!-- Medal Card -->


            <!-- Statistics Card -->
            <div class="col-xl-12 col-md-6 col-12">
              <div class="card card-statistics">
                <div class="card-header">
                  <h4 class="card-title">Statistics</h4>
                  <div class="d-flex align-items-center">
                    <p class="card-text font-small-2 me-25 mb-0">Live</p>
                  </div>
                </div>
                <div class="card-body statistics-body">
                  <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                      <div class="d-flex flex-row" style="padding-bottom: 16px;">
                        <div class="avatar bg-light-primary me-2">
                          <div class="avatar-content">
                            <i data-feather="trending-up" class="avatar-icon"></i>
                          </div>
                        </div>
                        <div class="my-auto">
                          <?php
                          $sql=mysqli_query($conn,"select count(*) as count from factory_registration where status='Active'");
                          $arr=mysqli_fetch_array($sql);
                          ?>
                          <h4 class="fw-bolder mb-0"><?= $arr['count']; ?></h4>
                          <p class="card-text mb-0" style="font-size: 15px;">Active Factory</p>
                        </div>
                      </div>
                      <div class="d-flex flex-row">
                        <div class="avatar bg-light-primary me-2">
                          <div class="avatar-content">
                            <i data-feather="trending-up" class="avatar-icon"></i>
                          </div>
                        </div>
                        <div class="my-auto">
                        <?php
                          $sql=mysqli_query($conn,"select count(*) as count from factory_registration where status='Deactive'");
                          $arr=mysqli_fetch_array($sql);
                          ?>
                          <h4 class="fw-bolder mb-0"><?= $arr['count']; ?></h4>
                          <p class="card-text mb-0" style="font-size: 15px;">Deactive Factory</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                      <div class="d-flex flex-row" style="padding-bottom: 16px;">
                        <div class="avatar bg-light-info me-2">
                          <div class="avatar-content">
                            <i data-feather="user" class="avatar-icon"></i>
                          </div>
                        </div>
                        <div class="my-auto">
                        <?php
                          $sql=mysqli_query($conn,"select count(*) as count from doctor_registration where status='Active'");
                          $arr=mysqli_fetch_array($sql);
                          ?>
                          <h4 class="fw-bolder mb-0"><?= $arr['count']; ?></h4>
                          <p class="card-text mb-0" style="font-size: 15px;">Active Doctors</p>
                        </div>
                      </div>
                      <div class="d-flex flex-row">
                        <div class="avatar bg-light-info me-2">
                          <div class="avatar-content">
                            <i data-feather="user" class="avatar-icon"></i>
                          </div>
                        </div>
                        <div class="my-auto">
                        <?php
                          $sql=mysqli_query($conn,"select count(*) as count from doctor_registration where status='Deactive'");
                          $arr=mysqli_fetch_array($sql);
                          ?>
                          <h4 class="fw-bolder mb-0"><?= $arr['count']; ?></h4>
                          <p class="card-text mb-0" style="font-size: 15px;">Deactive Doctors</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                      <div class="d-flex flex-row">
                        <div class="avatar bg-light-danger me-2">
                          <div class="avatar-content">
                            <i data-feather="users" class="avatar-icon"></i>
                          </div>
                        </div>
                        <div class="my-auto">
                          <h4 class="fw-bolder mb-0">26</h4>
                          <p class="card-text mb-0" style="font-size: 15px;">Males</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                      <div class="d-flex flex-row">
                        <div class="avatar bg-light-success me-2">
                          <div class="avatar-content">
                            <i data-feather="users" class="avatar-icon"></i>
                          </div>
                        </div>
                        <div class="my-auto">
                          <h4 class="fw-bolder mb-0">40</h4>
                          <p class="card-text mb-0" style="font-size: 15px;">Females</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--/ Statistics Card -->
          </div>

          <div class="row match-height">
            <!-- Company Table Card -->
            <div class="col-12">
              <div class="card card-company-table">
                <div class="card-body p-0">
                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th rowspan="2">SR No.</th>
                                                <th rowspan="2">Factory Name</th>
                                                <th rowspan="2">Address</th>
                                                <th rowspan="2">Office</th>
                                                <th colspan="2" style="text-align: center;">No. of Employee</th>
                                                <th colspan="2" style="text-align: center;">Date of Examination</th>
                                                <th rowspan="2">Select Period</th>
                                            </tr>
                                            <tr>
                                                <th>Male</th>
                                                <th>Female</th>
                                                <th>From</th>
                                                <th>To</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $sql=mysqli_query($conn,"select * from doctor_intimation");
                                                $count=1;
                                                while($row=mysqli_fetch_array($sql)) { ?>
                                            <tr>
                                                <td><?php echo $count; ?></td>
                                                <td><?php echo $row['factory_name']; ?></td>
                                                <td><?php echo $row['factory_address']; ?></td>
                                                <td><?php echo $row['office']; ?></td>
                                                <td><?php echo $row['employee_male']; ?></td>
                                                <td><?php echo $row['employee_female']; ?></td>
                                                <td><?php echo $row['examination_date_from']; ?></td>
                                                <td><?php echo $row['examination_date_to']; ?></td>
                                                <td><?php echo $row['select_period']; ?></td>
                                            </tr>
                                            <?php $count++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                </div>
              </div>
            </div>
            <!--/ Company Table Card -->


          </div>

          <div class="row">
            <!-- Radar Chart Starts-->
            <div class="col-lg-6 col-12">
              <div class="card">
                <div class="card-header d-flex flex-row justify-content-between align-items-center">
                  <h4 class="card-title">Radar Chart</h4>
                  <div class="d-flex align-items-center flex-wrap">
                    <div id="tooltip" class="tooltip-placeholder"></div>
                  </div>
                </div>
                <div class="card-body">
                  <div style="height:355px">
                    <div class="chartjs-size-monitor">
                      <div class="chartjs-size-monitor-expand">
                        <div class=""></div>
                      </div>
                      <div class="chartjs-size-monitor-shrink">
                        <div class=""></div>
                      </div>
                    </div><canvas class="radar-chart-ex chartjs chartjs-render-monitor" id="canvas" data-height="355"
                      width="551" height="355" style="display: block; width: 551px; height: 355px;"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <!-- Radar Chart Ends-->

            <!-- Polar Area Chart Starts -->
            <div class="col-lg-6 col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Factory</h4>
                  <div class="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-more-vertical cursor-pointer" role="button" id="heat-chart-dd"
                      data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <circle cx="12" cy="12" r="1"></circle>
                      <circle cx="12" cy="5" r="1"></circle>
                      <circle cx="12" cy="19" r="1"></circle>
                    </svg>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="heat-chart-dd">
                      <a class="dropdown-item" href="#">Last 28 Days</a>
                      <a class="dropdown-item" href="#">Last Month</a>
                      <a class="dropdown-item" href="#">Last Year</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div style="height:350px">
                    <div class="chartjs-size-monitor">
                      <div class="chartjs-size-monitor-expand">
                        <div class=""></div>
                      </div>
                      <div class="chartjs-size-monitor-shrink">
                        <div class=""></div>
                      </div>
                    </div><canvas class="polar-area-chart-ex chartjs chartjs-render-monitor" data-height="350"
                      width="551" height="350" style="display: block; width: 551px; height: 350px;"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <!-- Polar Area Chart Ends-->
          </div>
        </section>
        <!-- Dashboard Ecommerce ends -->

      </div>
    </div>
  </div>
  <!-- END: Content-->





  <div class="sidenav-overlay"></div>
  <div class="drag-target"></div>


  <?php include("include/footer.php");?>

  <!-- BEGIN: Vendor JS-->
  <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
  <!-- BEGIN Vendor JS-->

  <!-- BEGIN: Page Vendor JS-->
  <script src="../../../app-assets/vendors/js/charts/chart.min.js"></script>
  <script src="../../../app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
  <!-- END: Page Vendor JS-->

  <!-- BEGIN: Theme JS-->
  <script src="../../../app-assets/js/core/app-menu.min.js"></script>
  <script src="../../../app-assets/js/core/app.min.js"></script>
  <script src="../../../app-assets/js/scripts/customizer.min.js"></script>
  <!-- END: Theme JS-->

  <!-- BEGIN: Page JS-->
  <script src="../../../app-assets/js/scripts/charts/chart-chartjs.min.js"></script>
  <!-- END: Page JS-->

  <script>
    $(window).on('load', function () {
      if (feather) {
        feather.replace({
          width: 14,
          height: 14
        });
      }
    })
  </script>
</body>
<!-- END: Body-->

</html>