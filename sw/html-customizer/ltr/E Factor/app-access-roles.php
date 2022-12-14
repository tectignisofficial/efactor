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
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Roles - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css">
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
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/form-validation.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

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
          <h3>Roles List</h3>
<p class="mb-2">
  A role provided access to predefined menus and features so that depending <br />
  on assigned role an administrator can have access to what he need
</p>

<!-- Role cards -->
<div class="row">
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <span>Total 4 users</span>
          <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
            <li
              data-bs-toggle="tooltip"
              data-popup="tooltip-custom"
              data-bs-placement="top"
              title="Vinnie Mostowy"
              class="avatar avatar-sm pull-up"
            >
              <img class="rounded-circle" src="../../../app-assets/images/avatars/2.png" alt="Avatar" />
            </li>
            <li
              data-bs-toggle="tooltip"
              data-popup="tooltip-custom"
              data-bs-placement="top"
              title="Allen Rieske"
              class="avatar avatar-sm pull-up"
            >
              <img class="rounded-circle" src="../../../app-assets/images/avatars/12.png" alt="Avatar" />
            </li>
            <li
              data-bs-toggle="tooltip"
              data-popup="tooltip-custom"
              data-bs-placement="top"
              title="Julee Rossignol"
              class="avatar avatar-sm pull-up"
            >
              <img class="rounded-circle" src="../../../app-assets/images/avatars/6.png" alt="Avatar" />
            </li>
            <li
              data-bs-toggle="tooltip"
              data-popup="tooltip-custom"
              data-bs-placement="top"
              title="Kaith D'souza"
              class="avatar avatar-sm pull-up"
            >
              <img class="rounded-circle" src="../../../app-assets/images/avatars/11.png" alt="Avatar" />
            </li>
          </ul>
        </div>
        <div class="d-flex justify-content-between align-items-end mt-1 pt-25">
          <div class="role-heading">
            <h4 class="fw-bolder">Director</h4>
            <a href="javascript:;" class="role-edit-modal" data-bs-toggle="modal" data-bs-target="#addRoleModal">
              <small class="fw-bolder">Edit Role</small>
            </a>
          </div>
          <a href="javascript:void(0);" class="text-body"><i data-feather="copy" class="font-medium-5"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <span>Total 7 users</span>
          <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
            <li
              data-bs-toggle="tooltip"
              data-popup="tooltip-custom"
              data-bs-placement="top"
              title="Jimmy Ressula"
              class="avatar avatar-sm pull-up"
            >
              <img class="rounded-circle" src="../../../app-assets/images/avatars/4.png" alt="Avatar" />
            </li>
            <li
              data-bs-toggle="tooltip"
              data-popup="tooltip-custom"
              data-bs-placement="top"
              title="John Doe"
              class="avatar avatar-sm pull-up"
            >
              <img class="rounded-circle" src="../../../app-assets/images/avatars/1.png" alt="Avatar" />
            </li>
            <li
              data-bs-toggle="tooltip"
              data-popup="tooltip-custom"
              data-bs-placement="top"
              title="Kristi Lawker"
              class="avatar avatar-sm pull-up"
            >
              <img class="rounded-circle" src="../../../app-assets/images/avatars/2.png" alt="Avatar" />
            </li>
            <li
              data-bs-toggle="tooltip"
              data-popup="tooltip-custom"
              data-bs-placement="top"
              title="Kaith D'souza"
              class="avatar avatar-sm pull-up"
            >
              <img class="rounded-circle" src="../../../app-assets/images/avatars/5.png" alt="Avatar" />
            </li>
            <li
              data-bs-toggle="tooltip"
              data-popup="tooltip-custom"
              data-bs-placement="top"
              title="Danny Paul"
              class="avatar avatar-sm pull-up"
            >
              <img class="rounded-circle" src="../../../app-assets/images/avatars/7.png" alt="Avatar" />
            </li>
          </ul>
        </div>
        <div class="d-flex justify-content-between align-items-end mt-1 pt-25">
          <div class="role-heading">
            <h4 class="fw-bolder">Deputy Director</h4>
            <a href="javascript:;" class="role-edit-modal" data-bs-toggle="modal" data-bs-target="#addRoleModal">
              <small class="fw-bolder">Edit Role</small>
            </a>
          </div>
          <a href="javascript:void(0);" class="text-body"><i data-feather="copy" class="font-medium-5"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <span>Total 5 users</span>
          <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
            <li
              data-bs-toggle="tooltip"
              data-popup="tooltip-custom"
              data-bs-placement="top"
              title="Andrew Tye"
              class="avatar avatar-sm pull-up"
            >
              <img class="rounded-circle" src="../../../app-assets/images/avatars/6.png" alt="Avatar" />
            </li>
            <li
              data-bs-toggle="tooltip"
              data-popup="tooltip-custom"
              data-bs-placement="top"
              title="Rishi Swaat"
              class="avatar avatar-sm pull-up"
            >
              <img class="rounded-circle" src="../../../app-assets/images/avatars/9.png" alt="Avatar" />
            </li>
            <li
              data-bs-toggle="tooltip"
              data-popup="tooltip-custom"
              data-bs-placement="top"
              title="Rossie Kim"
              class="avatar avatar-sm pull-up"
            >
              <img class="rounded-circle" src="../../../app-assets/images/avatars/12.png" alt="Avatar" />
            </li>
            <li
              data-bs-toggle="tooltip"
              data-popup="tooltip-custom"
              data-bs-placement="top"
              title="Kim Merchent"
              class="avatar avatar-sm pull-up"
            >
              <img class="rounded-circle" src="../../../app-assets/images/avatars/10.png" alt="Avatar" />
            </li>
            <li
              data-bs-toggle="tooltip"
              data-popup="tooltip-custom"
              data-bs-placement="top"
              title="Sam D'souza"
              class="avatar avatar-sm pull-up"
            >
              <img class="rounded-circle" src="../../../app-assets/images/avatars/8.png" alt="Avatar" />
            </li>
          </ul>
        </div>
        <div class="d-flex justify-content-between align-items-end mt-1 pt-25">
          <div class="role-heading">
            <h4 class="fw-bolder">Add. Director</h4>
            <a href="javascript:;" class="role-edit-modal" data-bs-toggle="modal" data-bs-target="#addRoleModal">
              <small class="fw-bolder">Edit Role</small>
            </a>
          </div>
          <a href="javascript:void(0);" class="text-body"><i data-feather="copy" class="font-medium-5"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <span>Total 3 users</span>
          <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
            <li
              data-bs-toggle="tooltip"
              data-popup="tooltip-custom"
              data-bs-placement="top"
              title="Kim Karlos"
              class="avatar avatar-sm pull-up"
            >
              <img class="rounded-circle" src="../../../app-assets/images/avatars/3.png" alt="Avatar" />
            </li>
            <li
              data-bs-toggle="tooltip"
              data-popup="tooltip-custom"
              data-bs-placement="top"
              title="Katy Turner"
              class="avatar avatar-sm pull-up"
            >
              <img class="rounded-circle" src="../../../app-assets/images/avatars/9.png" alt="Avatar" />
            </li>
            <li
              data-bs-toggle="tooltip"
              data-popup="tooltip-custom"
              data-bs-placement="top"
              title="Peter Adward"
              class="avatar avatar-sm pull-up"
            >
              <img class="rounded-circle" src="../../../app-assets/images/avatars/12.png" alt="Avatar" />
            </li>
            <li
              data-bs-toggle="tooltip"
              data-popup="tooltip-custom"
              data-bs-placement="top"
              title="Kaith D'souza"
              class="avatar avatar-sm pull-up"
            >
              <img class="rounded-circle" src="../../../app-assets/images/avatars/10.png" alt="Avatar" />
            </li>
            <li
              data-bs-toggle="tooltip"
              data-popup="tooltip-custom"
              data-bs-placement="top"
              title="John Parker"
              class="avatar avatar-sm pull-up"
            >
              <img class="rounded-circle" src="../../../app-assets/images/avatars/11.png" alt="Avatar" />
            </li>
          </ul>
        </div>
        <div class="d-flex justify-content-between align-items-end mt-1 pt-25">
          <div class="role-heading">
            <h4 class="fw-bolder">Joint Director</h4>
            <a href="javascript:;" class="role-edit-modal" data-bs-toggle="modal" data-bs-target="#addRoleModal">
              <small class="fw-bolder">Edit Role</small>
            </a>
          </div>
          <a href="javascript:void(0);" class="text-body"><i data-feather="copy" class="font-medium-5"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <span>Total 2 users</span>
          <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
            <li
              data-bs-toggle="tooltip"
              data-popup="tooltip-custom"
              data-bs-placement="top"
              title="Kim Merchent"
              class="avatar avatar-sm pull-up"
            >
              <img class="rounded-circle" src="../../../app-assets/images/avatars/10.png" alt="Avatar" />
            </li>
            <li
              data-bs-toggle="tooltip"
              data-popup="tooltip-custom"
              data-bs-placement="top"
              title="Sam D'souza"
              class="avatar avatar-sm pull-up"
            >
              <img class="rounded-circle" src="../../../app-assets/images/avatars/6.png" alt="Avatar" />
            </li>
            <li
              data-bs-toggle="tooltip"
              data-popup="tooltip-custom"
              data-bs-placement="top"
              title="Nurvi Karlos"
              class="avatar avatar-sm pull-up"
            >
              <img class="rounded-circle" src="../../../app-assets/images/avatars/3.png" alt="Avatar" />
            </li>
            <li
              data-bs-toggle="tooltip"
              data-popup="tooltip-custom"
              data-bs-placement="top"
              title="Andrew Tye"
              class="avatar avatar-sm pull-up"
            >
              <img class="rounded-circle" src="../../../app-assets/images/avatars/8.png" alt="Avatar" />
            </li>
            <li
              data-bs-toggle="tooltip"
              data-popup="tooltip-custom"
              data-bs-placement="top"
              title="Rossie Kim"
              class="avatar avatar-sm pull-up"
            >
              <img class="rounded-circle" src="../../../app-assets/images/avatars/9.png" alt="Avatar" />
            </li>
          </ul>
        </div>
        <div class="d-flex justify-content-between align-items-end mt-1 pt-25">
          <div class="role-heading">
            <h4 class="fw-bolder">Restricted User</h4>
            <a href="javascript:;" class="role-edit-modal" data-bs-toggle="modal" data-bs-target="#addRoleModal">
              <small class="fw-bolder">Edit Role</small>
            </a>
          </div>
          <a href="javascript:void(0);" class="text-body"><i data-feather="copy" class="font-medium-5"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="row">
        <div class="col-sm-5">
          <div class="d-flex align-items-end justify-content-center h-100">
            <img
              src="../../../app-assets/images/illustration/faq-illustrations.svg"
              class="img-fluid mt-2"
              alt="Image"
              width="85"
            />
          </div>
        </div>
        <div class="col-sm-7">
          <div class="card-body text-sm-end text-center ps-sm-0">
            <a
              href="javascript:void(0)"
              data-bs-target="#addRoleModal"
              data-bs-toggle="modal"
              class="stretched-link text-nowrap add-new-role"
            >
              <span class="btn btn-primary mb-1">Add New Role</span>
            </a>
            <p class="mb-0">Add role, if it does not exist</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Role cards -->

<h3 class="mt-50">Total users with their roles</h3>
<p class="mb-2">Find all of your company???s administrator accounts and their associate roles.</p>
<!-- table -->
<div class="card">
  <div class="table-responsive">
    <table class="user-list-table table">
      <thead class="table-light">
        <tr>
          <th></th>
          <th></th>
          <th>Name</th>
          <th>Role</th>
          <th>Plan</th>
          <th>Billing</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
    </table>
  </div>
</div>
<!-- table -->
          <!-- Add Role Modal -->
<div class="modal fade" id="addRoleModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-add-new-role">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body px-5 pb-5">
        <div class="text-center mb-4">
          <h1 class="role-title">Add New Role</h1>
          <p>Set role permissions</p>
        </div>
        <!-- Add role form -->
        <form id="addRoleForm" class="row" onsubmit="return false">
          <div class="col-12">
            <label class="form-label" for="modalRoleName">Role Name</label>
            <input
              type="text"
              id="modalRoleName"
              name="modalRoleName"
              class="form-control"
              placeholder="Enter role name"
              tabindex="-1"
              data-msg="Please enter role name"
            />
          </div>
          <div class="col-12">
            <h4 class="mt-2 pt-50">Role Permissions</h4>
            <!-- Permission table -->
            <div class="table-responsive">
              <table class="table table-flush-spacing">
                <tbody>
                  <tr>
                    <td class="text-nowrap fw-bolder">
                      Administrator Access
                      <span data-bs-toggle="tooltip" data-bs-placement="top" title="Allows a full access to the system">
                        <i data-feather="info"></i>
                      </span>
                    </td>
                    <td>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="selectAll" />
                        <label class="form-check-label" for="selectAll"> Select All </label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-nowrap fw-bolder">User Management</td>
                    <td>
                      <div class="d-flex">
                        <div class="form-check me-3 me-lg-5">
                          <input class="form-check-input" type="checkbox" id="userManagementRead" />
                          <label class="form-check-label" for="userManagementRead"> Read </label>
                        </div>
                        <div class="form-check me-3 me-lg-5">
                          <input class="form-check-input" type="checkbox" id="userManagementWrite" />
                          <label class="form-check-label" for="userManagementWrite"> Write </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="userManagementCreate" />
                          <label class="form-check-label" for="userManagementCreate"> Create </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-nowrap fw-bolder">Content Management</td>
                    <td>
                      <div class="d-flex">
                        <div class="form-check me-3 me-lg-5">
                          <input class="form-check-input" type="checkbox" id="contentManagementRead" />
                          <label class="form-check-label" for="contentManagementRead"> Read </label>
                        </div>
                        <div class="form-check me-3 me-lg-5">
                          <input class="form-check-input" type="checkbox" id="contentManagementWrite" />
                          <label class="form-check-label" for="contentManagementWrite"> Write </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="contentManagementCreate" />
                          <label class="form-check-label" for="contentManagementCreate"> Create </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-nowrap fw-bolder">Disputes Management</td>
                    <td>
                      <div class="d-flex">
                        <div class="form-check me-3 me-lg-5">
                          <input class="form-check-input" type="checkbox" id="dispManagementRead" />
                          <label class="form-check-label" for="dispManagementRead"> Read </label>
                        </div>
                        <div class="form-check me-3 me-lg-5">
                          <input class="form-check-input" type="checkbox" id="dispManagementWrite" />
                          <label class="form-check-label" for="dispManagementWrite"> Write </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="dispManagementCreate" />
                          <label class="form-check-label" for="dispManagementCreate"> Create </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-nowrap fw-bolder">Database Management</td>
                    <td>
                      <div class="d-flex">
                        <div class="form-check me-3 me-lg-5">
                          <input class="form-check-input" type="checkbox" id="dbManagementRead" />
                          <label class="form-check-label" for="dbManagementRead"> Read </label>
                        </div>
                        <div class="form-check me-3 me-lg-5">
                          <input class="form-check-input" type="checkbox" id="dbManagementWrite" />
                          <label class="form-check-label" for="dbManagementWrite"> Write </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="dbManagementCreate" />
                          <label class="form-check-label" for="dbManagementCreate"> Create </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-nowrap fw-bolder">Financial Management</td>
                    <td>
                      <div class="d-flex">
                        <div class="form-check me-3 me-lg-5">
                          <input class="form-check-input" type="checkbox" id="finManagementRead" />
                          <label class="form-check-label" for="finManagementRead"> Read </label>
                        </div>
                        <div class="form-check me-3 me-lg-5">
                          <input class="form-check-input" type="checkbox" id="finManagementWrite" />
                          <label class="form-check-label" for="finManagementWrite"> Write </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="finManagementCreate" />
                          <label class="form-check-label" for="finManagementCreate"> Create </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-nowrap fw-bolder">Reporting</td>
                    <td>
                      <div class="d-flex">
                        <div class="form-check me-3 me-lg-5">
                          <input class="form-check-input" type="checkbox" id="reportingRead" />
                          <label class="form-check-label" for="reportingRead"> Read </label>
                        </div>
                        <div class="form-check me-3 me-lg-5">
                          <input class="form-check-input" type="checkbox" id="reportingWrite" />
                          <label class="form-check-label" for="reportingWrite"> Write </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="reportingCreate" />
                          <label class="form-check-label" for="reportingCreate"> Create </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-nowrap fw-bolder">API Control</td>
                    <td>
                      <div class="d-flex">
                        <div class="form-check me-3 me-lg-5">
                          <input class="form-check-input" type="checkbox" id="apiRead" />
                          <label class="form-check-label" for="apiRead"> Read </label>
                        </div>
                        <div class="form-check me-3 me-lg-5">
                          <input class="form-check-input" type="checkbox" id="apiWrite" />
                          <label class="form-check-label" for="apiWrite"> Write </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="apiCreate" />
                          <label class="form-check-label" for="apiCreate"> Create </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-nowrap fw-bolder">Repository Management</td>
                    <td>
                      <div class="d-flex">
                        <div class="form-check me-3 me-lg-5">
                          <input class="form-check-input" type="checkbox" id="repoRead" />
                          <label class="form-check-label" for="repoRead"> Read </label>
                        </div>
                        <div class="form-check me-3 me-lg-5">
                          <input class="form-check-input" type="checkbox" id="repoWrite" />
                          <label class="form-check-label" for="repoWrite"> Write </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="repoCreate" />
                          <label class="form-check-label" for="repoCreate"> Create </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-nowrap fw-bolder">Payroll</td>
                    <td>
                      <div class="d-flex">
                        <div class="form-check me-3 me-lg-5">
                          <input class="form-check-input" type="checkbox" id="payrollRead" />
                          <label class="form-check-label" for="payrollRead"> Read </label>
                        </div>
                        <div class="form-check me-3 me-lg-5">
                          <input class="form-check-input" type="checkbox" id="payrollWrite" />
                          <label class="form-check-label" for="payrollWrite"> Write </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="payrollCreate" />
                          <label class="form-check-label" for="payrollCreate"> Create </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- Permission table -->
          </div>
          <div class="col-12 text-center mt-2">
            <button type="submit" class="btn btn-primary me-1">Submit</button>
            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
              Discard
            </button>
          </div>
        </form>
        <!--/ Add role form -->
      </div>
    </div>
  </div>
</div>
<!--/ Add Role Modal -->

        </div>
      </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Customizer-->
    <div class="customizer d-none d-md-block"><a class="customizer-toggle d-flex align-items-center justify-content-center" href="#"><i class="spinner" data-feather="settings"></i></a><div class="customizer-content">
  <!-- Customizer header -->
  <div class="customizer-header px-2 pt-1 pb-0 position-relative">
    <h4 class="mb-0">Theme Customizer</h4>
    <p class="m-0">Customize & Preview in Real Time</p>

    <a class="customizer-close" href="#"><i data-feather="x"></i></a>
  </div>

  <hr />

  <!-- Styling & Text Direction -->
  <div class="customizer-styling-direction px-2">
    <p class="fw-bold">Skin</p>
    <div class="d-flex">
      <div class="form-check me-1">
        <input
          type="radio"
          id="skinlight"
          name="skinradio"
          class="form-check-input layout-name"
          checked
          data-layout=""
        />
        <label class="form-check-label" for="skinlight">Light</label>
      </div>
      <div class="form-check me-1">
        <input
          type="radio"
          id="skinbordered"
          name="skinradio"
          class="form-check-input layout-name"
          data-layout="bordered-layout"
        />
        <label class="form-check-label" for="skinbordered">Bordered</label>
      </div>
      <div class="form-check me-1">
        <input
          type="radio"
          id="skindark"
          name="skinradio"
          class="form-check-input layout-name"
          data-layout="dark-layout"
        />
        <label class="form-check-label" for="skindark">Dark</label>
      </div>
      <div class="form-check">
        <input
          type="radio"
          id="skinsemidark"
          name="skinradio"
          class="form-check-input layout-name"
          data-layout="semi-dark-layout"
        />
        <label class="form-check-label" for="skinsemidark">Semi Dark</label>
      </div>
    </div>
  </div>

  <hr />

  <!-- Menu -->
  <div class="customizer-menu px-2">
    <div id="customizer-menu-collapsible" class="d-flex">
      <p class="fw-bold me-auto m-0">Menu Collapsed</p>
      <div class="form-check form-check-primary form-switch">
        <input type="checkbox" class="form-check-input" id="collapse-sidebar-switch" />
        <label class="form-check-label" for="collapse-sidebar-switch"></label>
      </div>
    </div>
  </div>
  <hr />

  <!-- Layout Width -->
  <div class="customizer-footer px-2">
    <p class="fw-bold">Layout Width</p>
    <div class="d-flex">
      <div class="form-check me-1">
        <input type="radio" id="layout-width-full" name="layoutWidth" class="form-check-input" checked />
        <label class="form-check-label" for="layout-width-full">Full Width</label>
      </div>
      <div class="form-check me-1">
        <input type="radio" id="layout-width-boxed" name="layoutWidth" class="form-check-input" />
        <label class="form-check-label" for="layout-width-boxed">Boxed</label>
      </div>
    </div>
  </div>
  <hr />

  <!-- Navbar -->
  <div class="customizer-navbar px-2">
    <div id="customizer-navbar-colors">
      <p class="fw-bold">Navbar Color</p>
      <ul class="list-inline unstyled-list">
        <li class="color-box bg-white border selected" data-navbar-default=""></li>
        <li class="color-box bg-primary" data-navbar-color="bg-primary"></li>
        <li class="color-box bg-secondary" data-navbar-color="bg-secondary"></li>
        <li class="color-box bg-success" data-navbar-color="bg-success"></li>
        <li class="color-box bg-danger" data-navbar-color="bg-danger"></li>
        <li class="color-box bg-info" data-navbar-color="bg-info"></li>
        <li class="color-box bg-warning" data-navbar-color="bg-warning"></li>
        <li class="color-box bg-dark" data-navbar-color="bg-dark"></li>
      </ul>
    </div>

    <p class="navbar-type-text fw-bold">Navbar Type</p>
    <div class="d-flex">
      <div class="form-check me-1">
        <input type="radio" id="nav-type-floating" name="navType" class="form-check-input" checked />
        <label class="form-check-label" for="nav-type-floating">Floating</label>
      </div>
      <div class="form-check me-1">
        <input type="radio" id="nav-type-sticky" name="navType" class="form-check-input" />
        <label class="form-check-label" for="nav-type-sticky">Sticky</label>
      </div>
      <div class="form-check me-1">
        <input type="radio" id="nav-type-static" name="navType" class="form-check-input" />
        <label class="form-check-label" for="nav-type-static">Static</label>
      </div>
      <div class="form-check">
        <input type="radio" id="nav-type-hidden" name="navType" class="form-check-input" />
        <label class="form-check-label" for="nav-type-hidden">Hidden</label>
      </div>
    </div>
  </div>
  <hr />

  <!-- Footer -->
  <div class="customizer-footer px-2">
    <p class="fw-bold">Footer Type</p>
    <div class="d-flex">
      <div class="form-check me-1">
        <input type="radio" id="footer-type-sticky" name="footerType" class="form-check-input" />
        <label class="form-check-label" for="footer-type-sticky">Sticky</label>
      </div>
      <div class="form-check me-1">
        <input type="radio" id="footer-type-static" name="footerType" class="form-check-input" checked />
        <label class="form-check-label" for="footer-type-static">Static</label>
      </div>
      <div class="form-check me-1">
        <input type="radio" id="footer-type-hidden" name="footerType" class="form-check-input" />
        <label class="form-check-label" for="footer-type-hidden">Hidden</label>
      </div>
    </div>
  </div>
</div>

    </div>
    <!-- End: Customizer-->

    <!-- Buynow Button-->
    <div class="buy-now"><a href="https://1.envato.market/vuexy_admin" target="_blank" class="btn btn-danger">Buy Now</a>

    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <?php include("include/footer.php");?>


    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/buttons.bootstrap5.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.min.js"></script>
    <script src="../../../app-assets/js/core/app.min.js"></script>
    <script src="../../../app-assets/js/scripts/customizer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/modal-add-role.min.js"></script>
    <script src="../../../app-assets/js/scripts/pages/app-access-roles.min.js"></script>
    <!-- END: Page JS-->

    <script>
      $(window).on('load',  function(){
        if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
      })
    </script>
  </body>
  <!-- END: Body-->
</html>