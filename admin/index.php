<?php
session_start();
include '../db_conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Student Information System</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
</head>
<?php
//session_start();
if(!isset($_SESSION["admin"]))
{
  header('Location: ../index.php');
}

?>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html">
          <!-- <img src="images/diu.jpg" alt="logo" /> -->
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
       <!--  <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item">
            <a href="#" class="nav-link">Schedule
              <span class="badge badge-primary ml-1">New</span>
            </a>
          </li>
          <li class="nav-item active">
            <a href="#" class="nav-link">
              <i class="mdi mdi-elevation-rise"></i>Reports</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="mdi mdi-bookmark-plus-outline"></i>Score</a>
          </li>
        </ul> -->
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Admin</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
             <!--  <a class="dropdown-item">
                Change Password
              </a> -->
              <a href="../logout.php" class="dropdown-item">
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
            <a class="nav-link" href="index.php">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/forms/regst.php">
              <!-- <i class="menu-icon mdi mdi-backup-restore"></i> -->
              <span class="menu-title">Insert Information</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/modify.php">
              <!-- <i class="menu-icon mdi mdi-table"></i> -->
              <span class="menu-title">Modify Information</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/delete.php">
             <!--  <i class="menu-icon mdi mdi-table"></i> -->
              <span class="menu-title">Delete Information</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/search.php">
              <!-- <i class="menu-icon mdi mdi-table"></i> -->
              <span class="menu-title">search students record</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/class.php">
              <!-- <i class="menu-icon mdi mdi-table"></i> -->
              <span class="menu-title">View Records Classwise</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <?php 
            $query="SELECT COUNT(id) FROM `dept`";
            $resource=mysqli_query($conn,$query); 
            while($result=mysqli_fetch_array($resource))
            {  ?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-account-location text-danger icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Total Student</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0"><?php echo $result['COUNT(id)']; ?></h3>
                       <?php } ?>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                      Total Number of Student
                  </p>
                </div>
              </div>
            </div>
            <?php 
            $query="SELECT COUNT(class) FROM `dept` WHERE class ='CSE'";
            $resource=mysqli_query($conn,$query); 
            while($result=mysqli_fetch_array($resource))
            {  ?>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-account-location text-warning icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">CSE Student</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0"><?php echo $result['COUNT(class)']; ?></h3>
                       <?php } ?>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    Total Number of CSE Student
                  </p>
                </div>
              </div>
            </div>
            <?php 
            $query="SELECT COUNT(class) FROM `dept` WHERE class ='EEE'";
            $resource=mysqli_query($conn,$query); 
            while($result=mysqli_fetch_array($resource))
            {  ?>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-account-location text-success icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">EEE Student</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0"><?php echo $result['COUNT(class)']; ?></h3>
                       <?php } ?>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    Total Number of EEE Student
                  </p>
                </div>
              </div>
            </div>
            <?php 
            $query="SELECT COUNT(class) FROM `dept` WHERE class ='BBA'";
            $resource=mysqli_query($conn,$query); 
            while($result=mysqli_fetch_array($resource))
            {  ?>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-account-location text-info icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">BBA Student</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0"><?php echo $result['COUNT(class)']; ?></h3>
                       <?php } ?>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                     Total Number of BBA Student
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Md. Arifur Rahman</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
 
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>