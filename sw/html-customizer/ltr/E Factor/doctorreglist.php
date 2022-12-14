<?php include("include/config.php"); 

if(isset($_GET['deleid'])){
    $deleid=$_GET['deleid'];
    $sql=mysqli_query($conn,"DELETE from doctor_registration where id ='$deleid'");
    if($sql){
        header('location:factoryreglist.php');
    }
}

?>

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
    <link rel="stylesheet" type="text/css"
        href="../../../app-assets/css/plugins/extensions/ext-component-toastr.min.css">
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
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0"></h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Doctor List
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Doctor List
                                    </h3>
                                    <a class="btn btn-primary" style="float: right;" href="doctorregform.php"><i
                                            class="fa fa-plus"></i>
                                        Add Details
                                    </a>
                                </div>
                                <div class="table-responsive">
                                    <table class="datatables-basic table table-bordered">
                                        <thead>
                                            <tr>
                                                <th rowspan="2">SR No.</th>
                                                <th rowspan="2">Code</th>
                                                <th rowspan="2">Doctor Name</th>
                                                <th rowspan="2">Location</th>
                                                <th colspan="2" style="text-align: center;">Validity</th>
                                                <th rowspan="2">Mobile No.</th>
                                                <th rowspan="2">Email</th>
                                                <th rowspan="2">Pancard</th>
                                                <th rowspan="2">Aadhar card</th>
                                                <th rowspan="2">Status</th>
                                                <th rowspan="2">Action</th>
                                            </tr>
                                            <tr>
                                                <th>From</th>
                                                <th>To</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $sql=mysqli_query($conn,"select * from doctor_registration");
                                                $count=1;
                                                while($row=mysqli_fetch_array($sql)) { ?>
                                            <tr>
                                                <td><?php echo $count; ?></td>
                                                <td><?php echo $row['code']; ?></td>
                                                <td><?php echo $row['doctor_name']; ?></td>
                                                <td><?php echo $row['location']; ?></td>
                                                <td><?php echo $row['validity_from']; ?></td>
                                                <td><?php echo $row['validity_to']; ?></td>
                                                <td><?php echo $row['mobile_no']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['pancard']; ?></td>
                                                <td><?php echo $row['aadharcard']; ?></td>
                                                <td><?php 
                                                        $status=$row['status'];
                                                        if($status=='Active'){
                                                            echo '<span class="badge rounded-pill badge-light-primary me-1">Active</span>';
                                                        }
                                                        else if($status=='Completed'){
                                                            echo '<span class="badge rounded-pill badge-light-success me-1">Completed</span>';
                                                        }
                                                        else if($status=='Deactive'){
                                                            echo '<span class="badge rounded-pill badge-light-warning me-1">Deactive</span>';
                                                        }
                                                        else if($status=='Scheduled'){
                                                            echo '<span class="badge rounded-pill badge-light-info me-1">Scheduled</span>';
                                                        }
                                                        ?></td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-icon rounded-circle btn-flat-primary btnmod1"
                                                        data-bs-toggle="modal" data-bs-target="#editUser"><i
                                                            data-feather="edit"></i></button>

                                                    <a href="factoryreglist.php?deleid=<?php echo $row['id']; ?>"><button type="button"
                                                            class="btn btn-icon rounded-circle btn-flat-danger"><i
                                                                data-feather="trash"></i></button></a>

                                                </td>
                                            </tr>
                                            <?php $count++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Basic table -->
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
    <script src="../../../app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="../../../app-assets/vendors/js/extensions/toastr.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.min.js"></script>
    <script src="../../../app-assets/js/core/app.min.js"></script>
    <script src="../../../app-assets/js/scripts/customizer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/dashboard-ecommerce.min.js"></script>
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