<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Student Information System</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  
</head>

<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.php">
          <!-- <img src="images/diu.jpg" alt="logo" /> -->
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Admin</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a href="../../../logout.php" class="dropdown-item">
                Sign Out
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="../../index.php">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../forms/regst.php">
              <!-- <i class="menu-icon mdi mdi-backup-restore"></i> -->
              <span class="menu-title">Insert Information</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../tables/modify.php">
              <!-- <i class="menu-icon mdi mdi-table"></i> -->
              <span class="menu-title">Modify Information</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../tables/delete.php">
             <!--  <i class="menu-icon mdi mdi-table"></i> -->
              <span class="menu-title">Delete Information</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../samples/search.php">
              <!-- <i class="menu-icon mdi mdi-table"></i> -->
              <span class="menu-title">search students record</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../tables/class.php">
              <!-- <i class="menu-icon mdi mdi-table"></i> -->
              <span class="menu-title">View Records Class Wise</span>
            </a>
          </li>
        </ul>
      </nav>