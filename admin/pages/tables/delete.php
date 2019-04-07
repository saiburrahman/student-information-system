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
                  <h4 class="card-title">Delete table</h4>
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
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <?php 
					 	$query="SELECT * FROM dept";
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
                          <td>
                            <a href="delete2.php?id=<?php echo $result['id'];?>">	
                            <!-- <button type="button" class="btn btn-danger btn-rounded btn-fw">Delete</button> -->
                            <label class="btn btn-outline-danger btn-rounded btn-fw">Delete</a></label>
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