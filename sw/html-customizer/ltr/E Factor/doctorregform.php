<?php include("include/config.php"); 

if(isset($_POST['submit'])){
    $doctor_name=$_POST['dname'];
    $code=$_POST['code'];
    $location=$_POST['location'];
    $pancard=$_POST['pancard'];
    $aadharcard=$_POST['aadharcard'];
    $mobile_no=$_POST['mobile_no'];
    $email=$_POST['email'];
    $validity_from=$_POST['validity_from'];
    $validity_to=$_POST['validity_to'];

    $sql=mysqli_query($conn,"INSERT INTO `doctor_registration`(`doctor_name`,`code`,`location`,`pancard`,`aadharcard`,`mobile_no`,`email`,`validity_from`,`validity_to`) VALUE ('$doctor_name','$code','$location','$pancard','$aadharcard','$mobile_no','$email','$validity_from','$validity_to')");
    if($sql==1){
        echo'<script>alert("Successfully Submitted");</script>';
        header("location:doctorreglist.php");
    }else{
        echo'<script>alert("oops...somthing went wrong");</script>';
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
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/select/select2.min.css">
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

    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/pickers/form-flat-pickr.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/pickers/form-pickadate.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/pickers/pickadate/pickadate.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css">

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
                                    <li class="breadcrumb-item"><a href="">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="doctorreglist.php">Doctor List</a>
                                    </li>
                                    <li class="breadcrumb-item active">Add Details
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">

                <!-- Select2 Start  -->
                <section class="basic-select2">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add Details</h4>
                                </div>
                                <div class="card-body">
                                    <form method="POST">
                                        <div class="row">
                                            <!-- Basic -->
                                            <div class="col-md-6 mb-1">
                                                <label class="form-label" for="select2-basic">Doctor Name</label>
                                                <div class="input-group has-validation">
                                                    <span class="input-group-text" id="inputGroupPrepend">Dr.</span>
                                                    <input type="text" class="form-control" name="dname" id="basicInput"
                                                        placeholder="Enter Name" />
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-1">
                                                <label class="form-label" for="select2-basic">Code</label>
                                                <input type="text" class="form-control" name="code" id="basicInput"
                                                    placeholder="Enter Code" />
                                            </div>

                                            <!-- Multiple -->
                                            <div class="col-md-12 mb-1">
                                                <label class="form-label" for="select2-limited">Location</label>
                                                <?php
                                                $query=mysqli_query($conn,"select * from our_office");
                                               
                                                ?>
                                                <select class="max-length form-select" name="location"
                                                    id="select2-limited" multiple>
                                                    <?php
                                                    while($sql=mysqli_fetch_array($query)) { ?>
                                                        <option>
                                                            <?php echo $sql['branch_name']; ?></option>
                                                        <?php } ?>
                                                </select>
                                            </div>

                                            <div class="col-md-6 mb-1">
                                                <label class="form-label" for="select2-basic">Pancard</label>
                                                <input type="text" class="form-control" name="pancard" id="basicInput"
                                                    placeholder="Enter Pancard Number" />
                                            </div>

                                            <div class="col-md-6 mb-1">
                                                <label class="form-label" for="select2-basic">Aadhar Card</label>
                                                <input type="text" class="form-control" name="aadharcard"
                                                    id="basicInput" placeholder="Enter Aadhar Card Number" />
                                            </div>

                                            <div class="col-md-6 mb-1">
                                                <label class="form-label" for="select2-basic">Mobile Number</label>
                                                <input type="text" class="form-control" name="mobile_no" id="basicInput"
                                                    placeholder="Enter Mobile" />
                                            </div>

                                            <div class="col-md-6 mb-1">
                                                <label class="form-label" for="select2-basic">Email Id</label>
                                                <input type="text" class="form-control" name="email" id="basicInput"
                                                    placeholder="Enter email" />
                                            </div>

                                            <div class="col-md-12 mb-1">
                                                <div class="row">
                                                    <label class="form-label" for="select2-basic">Validity </label>
                                                    <div class="col-sm-6 mb-1">
                                                        <div class="input-group has-validation">
                                                            <span class="input-group-text"
                                                                id="inputGroupPrepend">From</span>
                                                            <input type="text" name="validity_from"
                                                                id="fp-human-friendly"
                                                                class="form-control flatpickr-human-friendly"
                                                                placeholder="MM DD, YYYY" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 mb-1">
                                                        <div class="input-group has-validation">
                                                            <span class="input-group-text"
                                                                id="inputGroupPrepend">To</span>
                                                            <input type="text" name="validity_to" id="fp-human-friendly"
                                                                class="form-control flatpickr-human-friendly"
                                                                placeholder="MM DD, YYYY" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 modal-footer">
                                                <button type="submit" class="btn btn-primary"
                                                    name="submit">Submit</button>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Select2 End -->

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
    <script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>

    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.min.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <script src="../../../app-assets/js/core/app.min.js"></script>
    <script src="../../../app-assets/js/scripts/customizer.min.js"></script>
    <!-- END: Theme JS-->

    <script src="../../../app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/dashboard-ecommerce.min.js"></script>
    <script src="../../../app-assets/js/scripts/forms/form-select2.js"></script>
    <script src="../../../app-assets/js/scripts/forms/pickers/form-pickers.js"></script>

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