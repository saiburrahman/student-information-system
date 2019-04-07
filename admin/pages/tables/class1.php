<?php
session_start();
include '../../main/header.php';
include '../../../db_conn.php';
?>
<?php
if(!isset($_SESSION["admin"]))
{
	header('Location: ../../../index.php');
}
?>
      <!-- partial -->
      <div class="main-panel">
       <div class="content-wrapper">
          <div class="row">
          	<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Deptment of CSE Student</h4>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            Name
                          </th>
                          <th>
                            Roll Number
                          </th>
                          <th>
                            Department
                          </th>
                          <th>
                            Address
                          </th>
                        </tr>
                      </thead>
                      <?php 
					 	$query="SELECT * FROM dept WHERE class ='CSE' ";
		 				$resource=mysqli_query($conn,$query); 
						while($result=mysqli_fetch_array($resource))
						{  ?>
                      <tbody>
                        <tr>
                          <td>
                           <?php echo $result['name']; ?>
                          </td>
                          <td>
                            <?php echo $result['roll']; ?>
                          </td>
                          <td>
                            <?php echo $result['class']; ?>
                          </td>
                          <td>
                            <?php echo $result['address']; ?>
                          </td>
                        </tr>
                      </tbody>
                      <?php }?>
                    </table>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="row">
          	<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Deptment of EEE Student</h4>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            Name
                          </th>
                          <th>
                            Roll Number
                          </th>
                          <th>
                            Department
                          </th>
                          <th>
                            Address
                          </th>
                        </tr>
                      </thead>
                      <?php 
					 	$query="SELECT * FROM dept WHERE class ='EEE' ";
		 				$resource=mysqli_query($conn,$query); 
						while($result=mysqli_fetch_array($resource))
						{  ?>
                      <tbody>
                        <tr>
                          <td>
                           <?php echo $result['name']; ?>
                          </td>
                          <td>
                            <?php echo $result['roll']; ?>
                          </td>
                          <td>
                            <?php echo $result['class']; ?>
                          </td>
                          <td>
                            <?php echo $result['address']; ?>
                          </td>
                        </tr>
                      </tbody>
                      <?php }?>
                    </table>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="row">
          	<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Deptment of BBA Student</h4>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            Name
                          </th>
                          <th>
                            Roll Number
                          </th>
                          <th>
                            Department
                          </th>
                          <th>
                            Address
                          </th>
                        </tr>
                      </thead>
                      <?php 
					 	$query="SELECT * FROM dept WHERE class ='BBA' ";
		 				$resource=mysqli_query($conn,$query); 
						while($result=mysqli_fetch_array($resource))
						{  ?>
                      <tbody>
                        <tr>
                          <td>
                           <?php echo $result['name']; ?>
                          </td>
                          <td>
                            <?php echo $result['roll']; ?>
                          </td>
                          <td>
                            <?php echo $result['class']; ?>
                          </td>
                          <td>
                            <?php echo $result['address']; ?>
                          </td>
                        </tr>
                      </tbody>
                      <?php }?>
                    </table>
                  </div>
                </div>
              </div>
          </div>
        </div>
    </div>
        <!-- content-wrapper ends -->
<?php include '../../main/footer.php';?>