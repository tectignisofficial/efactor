<?php include("include/config.php"); 

if(isset($_POST['submit'])){
    $factory_name=$_POST['factory_name'];
    $factory_address=$_POST['factory_address'] ?? null;
    $office=$_POST['office'] ?? null;
    $select_period=$_POST['select_period'];
    $employee_male=$_POST['employee_male'];
    $employee_female=$_POST['employee_female'];
    $examination_date_from=$_POST['examination_date_from'];
    $examination_date_to=$_POST['examination_date_to'];

    $sql=mysqli_query($conn,"INSERT INTO `doctor_intimation`(`factory_name`,`factory_address`,`office`,`select_period`,`employee_male`,`employee_female`,`examination_date_from`,`examination_date_to`) VALUE ('$factory_name','$factory_address','$office','$select_period','$employee_male','$employee_female','$examination_date_from','$examination_date_to')");
    if($sql==1){
        echo'<script>alert("Successfully Submitted");</script>';
        header("location:doctorintimation.php");
    }else{
        echo'<script>alert("oops...somthing went wrong");</script>';
    }
}
?>

<!DOCTYPE html>
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
    <title>Dashboard E Factory</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/select/select2.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css">
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

    <!-- BEGIN: Header-->
    <?php include("include/header.php");?>
    <!-- END: Header-->


    <!-- BEGIN: Sidebar Menu-->
    <?php include("include/sidebar.php");?>
    <!-- END: Sidebar Menu-->

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
                                    <li class="breadcrumb-item"><a href="doctorintimation.php">Intimation</a>
                                    </li>
                                    <li class="breadcrumb-item">Intimation Form
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
                                    <h4 class="card-title">Intimation Form</h4>
                                </div>
                                <div class="card-body">
                                    <form method="POST">
                                        <div class="row">
                                            <!-- Basic -->
                                            <div class="col-md-12 mb-1">
                                                <label class="form-label" for="select2-basic">Factory Name</label>
                                                <div class="mb-1">
                                                    <?php
                                                $query=mysqli_query($conn,"select * from factory_registration");
                                               
                                                ?>
                                                    <select class="select2 form-select factoryname" id="select2-basic "
                                                        name="factory_name">
                                                        <option selected>Select</option>
                                                        <?php
                                                    while($sql=mysqli_fetch_array($query)) { ?>
                                                        <option value="<?php echo $sql['factory_name']; ?>">
                                                            <?php echo $sql['factory_name']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="ajaxcall">

                                                <div class="col-md-12 mb-1">
                                                    <label class="form-label" for="select2-basic">Address</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                                        rows="2" value="" name="factory_address" placeholder="Address"
                                                        readonly></textarea>
                                                </div>

                                                <!-- Multiple -->
                                                <div class="col-md-12 mb-1">
                                                    <label class="form-label" for="select2-array">Office</label>
                                                    <input type="text" class="form-control" id="basicInput" value=""
                                                        name="office" placeholder="Office" readonly />
                                                </div>
                                            </div>

                                            <div class="col-md-12 mb-1">
                                                <label class="form-label" for="basicSelect">Select Period</label>
                                                <select class="form-select" id="basicSelect" name="select_period">
                                                    <option>Select</option>
                                                    <option>6 Month</option>
                                                    <option>1 Year</option>
                                                </select>
                                            </div>

                                            <div class="col-md-12 mb-1">
                                                <div class="row">
                                                    <label class="form-label" for="select2-basic">No. of Employee
                                                    </label>
                                                    <div class="col-sm-6 mb-1">
                                                        <div class="input-group has-validation">
                                                            <span class="input-group-text"
                                                                id="inputGroupPrepend">Male</span>
                                                            <input type="text" class="form-control" id="basicInput"
                                                                name="employee_male" placeholder="Enter Male" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 mb-1">
                                                        <div class="input-group has-validation">
                                                            <span class="input-group-text"
                                                                id="inputGroupPrepend">Female</span>
                                                            <input type="text" class="form-control" id="basicInput"
                                                                name="employee_female" placeholder="Enter Female" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 mb-1">
                                                <div class="row">
                                                    <label class="form-label" for="select2-basic">Date of
                                                        Examination</label>
                                                    <div class="col-sm-6 mb-1">
                                                        <div class="input-group has-validation">
                                                            <span class="input-group-text"
                                                                id="inputGroupPrepend">From</span>
                                                            <input type="text" name="examination_date_from"
                                                                id="fp-human-friendly"
                                                                class="form-control flatpickr-human-friendly"
                                                                placeholder="MM DD, YYYY" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 mb-1">
                                                        <div class="input-group has-validation">
                                                            <span class="input-group-text"
                                                                id="inputGroupPrepend">To</span>
                                                            <input type="text" name="examination_date_to"
                                                                id="fp-human-friendly"
                                                                class="form-control flatpickr-human-friendly"
                                                                placeholder="MM DD, YYYY" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 modal-footer" style="margin-top:0;">
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
            </div>

            <!-- Select2 End -->

        </div>
    </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php include("include/footer.php");?>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->
    <script src="../../../app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>

    <!-- BEGIN: Page JS-->
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
    <script>
        //         function fileint(val){
        //             let val=val;
        //             $.ajax({
        //                 url:'api.php',
        //                 method:'post',
        //                 data:{val:val},
        //                 success:function(data){
        // alert(data);
        //                 }
        //             })
        //         }

        $(document).ready(function () {
            $(".factoryname").change(function () {
                let factory = $(this).val()
                $.ajax({
                    url: 'api.php',
                    method: 'post',
                    data: {
                        factory: factory
                    },
                    success: function (data) {
                        $(".ajaxcall").html(data);
                    }
                })
            })
        })
    </script>
</body>
<!-- END: Body-->

</html>