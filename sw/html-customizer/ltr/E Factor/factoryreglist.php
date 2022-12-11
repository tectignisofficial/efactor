<?php include("include/config.php"); ?>

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
                                    <li class="breadcrumb-item active">Factory List
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--<div class="content-body">
        
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Factory List
                                    </h3>
                                    <a class="btn btn-primary" style="float: right;" href="factorregform.php"><i
                                            class="fa fa-plus"></i>
                                        Add Details
                                    </a>
                                </div>

                                <table class="datatables-basic table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SR No.</th>
                                            <th>Factory Name</th>
                                            <th>Address</th>
                                            <th>Office</th>
                                            <th>Authorized Name</th>
                                            <th>Mobile No.</th>
                                            <th>Contact No.1</th>
                                            <th>Contact No.2</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <td>1</td>
                                        <td>xyz</td>
                                        <td>Panvel</td>
                                        <td>aaaa</td>
                                        <td style="text-align: center;">abc</td>
                                        <td>1234567899</td>
                                        <td>13325356</td>
                                        <td>245346456</td>
                                        <td>Open</td>
                                        <td>
                                            <button type="button"
                                                class="btn btn-icon rounded-circle btn-flat-primary btnmod1"
                                                data-bs-toggle="modal" data-bs-target="#editUser"><i
                                                    data-feather="edit"></i></button>

                                            <a href="#"><button type="button"
                                                    class="btn btn-icon rounded-circle btn-flat-danger"><i
                                                        data-feather="trash"></i></button></a>

                                        </td>
                                    </tbody>
                                    <tbody>
                                        <td>1</td>
                                        <td>xyz</td>
                                        <td>Panvel</td>
                                        <td>aaaa</td>
                                        <td style="text-align: center;">abc</td>
                                        <td>1234567899</td>
                                        <td>13325356</td>
                                        <td>245346456</td>
                                        <td>Open</td>
                                        <td>
                                            <button type="button"
                                                class="btn btn-icon rounded-circle btn-flat-primary btnmod1"
                                                data-bs-toggle="modal" data-bs-target="#editUser"><i
                                                    data-feather="edit"></i></button>

                                            <a href="#"><button type="button"
                                                    class="btn btn-icon rounded-circle btn-flat-danger"><i
                                                        data-feather="trash"></i></button></a>

                                        </td>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
             
            </div> -->

            <div.class="content-body">
                <section id="multilingual-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header border-bottom">
                                    <h4 class="card-title">Factory List</h4>
                                    <a class="btn btn-primary" style="float: right;" href="factorregform.php"><i
                                            class="fa fa-plus"></i>
                                        Add Factory
                                    </a>
                                </div>
                                <div class="card-datatable">
                                    <div id="DataTables_Table_3_wrapper"
                                        class="dataTables_wrapper dt-bootstrap5 no-footer">
                                        <div class="d-flex justify-content-between align-items-center mx-0 row">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="dataTables_length" id="DataTables_Table_3_length">
                                                    <label><select name="DataTables_Table_3_length"
                                                            aria-controls="DataTables_Table_3" class="form-select">
                                                            <option value="7">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">7</font>
                                                                </font>
                                                            </option>
                                                            <option value="10">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">10</font>
                                                                </font>
                                                            </option>
                                                            <option value="25">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">25</font>
                                                                </font>
                                                            </option>
                                                            <option value="50">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">50</font>
                                                                </font>
                                                            </option>
                                                            <option value="75">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">75</font>
                                                                </font>
                                                            </option>
                                                            <option value="100">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">100</font>
                                                                </font>
                                                            </option>
                                                        </select>
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">show entries</font>
                                                        </font>
                                                    </label></div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div id="DataTables_Table_3_filter" class="dataTables_filter"
                                                    style="float: right;><label><font style=" vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Search</font>
                                                    </font><input type="search" class="form-control" placeholder=""
                                                        aria-controls="DataTables_Table_3"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="dt-multilingual table dataTable no-footer dtr-column"
                                                id="DataTables_Table_3" role="grid"
                                                aria-describedby="DataTables_Table_3_info" style="width: 1036px;">
                                                <thead>
                                                    <tr>
                                                        <th>SR No.</th>
                                                        <th>Office</th>
                                                        <th>Factory Name</th>
                                                        <th>Factory Address</th>
                                                        <th>email</th>
                                                        <th>Authorized Name</th>
                                                        <th>Mobile No.</th>
                                                        <th>Contact No.1</th>
                                                        <th>Contact No.2</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                $sql=mysqli_query($conn,"select * from factory_registration");
                                                $count=1;
                                                while($row=mysqli_fetch_array($sql)) { ?>
                                                    <tr>
                                                        <td><?php echo $count; ?></td>
                                                        <td><?php echo $row['office']; ?></td>
                                                        <td><?php echo $row['factory_name']; ?></td>
                                                        <td><?php echo $row['factory_address']; ?></td>
                                                        <td><?php echo $row['email']; ?></td>
                                                        <td><?php echo $row['authorized_name']; ?></td>
                                                        <td><?php echo $row['mobile_no']; ?></td>
                                                        <td><?php echo $row['emergency_contact_1']; ?></td>
                                                        <td><?php echo $row['emergency_contact_2']; ?></td>
                                                        <td>
                                                            <?php 
                                                        $status=$row['status'];
                                                        if($status=='Active'){
                                                            echo '<span class="badge rounded-pill badge-light-primary me-1">Active</span>';
                                                        }
                                                        else if($status=='Completed'){
                                                            echo '<span class="badge rounded-pill badge-light-success me-1">Completed</span>';
                                                        }
                                                        else if($status=='Pending'){
                                                            echo '<span class="badge rounded-pill badge-light-warning me-1">Pending</span>';
                                                        }
                                                        else if($status=='Scheduled'){
                                                            echo '<span class="badge rounded-pill badge-light-info me-1">Scheduled</span>';
                                                        }
                                                        ?>
                                                        </td>
                                                        <td>
                                                            <button type="button"
                                                                class="btn btn-icon rounded-circle btn-flat-primary btnmod1"
                                                                data-bs-toggle="modal" data-bs-target="#editUser"><i
                                                                    data-feather="edit"></i></button>

                                                            <a href="#"><button type="button"
                                                                    class="btn btn-icon rounded-circle btn-flat-danger"><i
                                                                        data-feather="trash"></i></button></a>
                                                        </td>
                                                    </tr>
                                                    <?php $count++; } ?>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="d-flex justify-content-between mx-0 row">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="dataTables_info" id="DataTables_Table_3_info" role="status"
                                                    aria-live="polite">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">1 to 7 out of 100 entries
                                                        </font>
                                                    </font>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">

                                                <div class="dataTables_paginate paging_simple_numbers"
                                                    id="DataTables_Table_3_paginate" style="
                                                            float: right;
                                                        ">
                                                    <ul class="pagination">
                                                        <li class="paginate_button page-item previous disabled"
                                                            id="DataTables_Table_3_previous"><a href="#"
                                                                aria-controls="DataTables_Table_3" data-dt-idx="0"
                                                                tabindex="0" class="page-link">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">Return</font>
                                                                </font>
                                                            </a></li>
                                                        <li class="paginate_button page-item active"><a href="#"
                                                                aria-controls="DataTables_Table_3" data-dt-idx="1"
                                                                tabindex="0" class="page-link">1</a></li>
                                                        <li class="paginate_button page-item "><a href="#"
                                                                aria-controls="DataTables_Table_3" data-dt-idx="2"
                                                                tabindex="0" class="page-link">2</a></li>
                                                        <li class="paginate_button page-item "><a href="#"
                                                                aria-controls="DataTables_Table_3" data-dt-idx="3"
                                                                tabindex="0" class="page-link">3</a></li>
                                                        <li class="paginate_button page-item "><a href="#"
                                                                aria-controls="DataTables_Table_3" data-dt-idx="4"
                                                                tabindex="0" class="page-link">4</a></li>
                                                        <li class="paginate_button page-item "><a href="#"
                                                                aria-controls="DataTables_Table_3" data-dt-idx="5"
                                                                tabindex="0" class="page-link">5</a></li>
                                                        <li class="paginate_button page-item disabled"
                                                            id="DataTables_Table_3_ellipsis"><a href="#"
                                                                aria-controls="DataTables_Table_3" data-dt-idx="6"
                                                                tabindex="0" class="page-link">…</a></li>
                                                        <li class="paginate_button page-item "><a href="#"
                                                                aria-controls="DataTables_Table_3" data-dt-idx="7"
                                                                tabindex="0" class="page-link">15</a></li>
                                                        <li class="paginate_button page-item next"
                                                            id="DataTables_Table_3_next"><a href="#"
                                                                aria-controls="DataTables_Table_3" data-dt-idx="8"
                                                                tabindex="0" class="page-link">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">Next</font>
                                                                </font>
                                                            </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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