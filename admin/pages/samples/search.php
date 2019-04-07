<?php
session_start();
include '../../main/header.php';
include '../../../db_conn.php';
?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 grid-margin stretch-card">
              <div class="container">
              <form name="reg" method="post" action=""  onsubmit="return (validate());">
                <div class="form-group">
                  <label for="searchOption">Select Categary</label>
                    <select class="form-control" name="sel" id="searchOption">
                          <option selected>select Option</option>
                          <option value='name'> Name</option>
                          <option value='rollno'>Roll No</option>
                          <option value='cls'>Class</option>
                          <option value='address'>Address</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="ty" id="ty" placeholder="Search">
                  </div>
                  <button type="submit" name='se' class="btn btn-primary">Search</button>
              </form>
              </div>                            
            </div>
          </div>

          <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Search table</h4>
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
                  if(isset($_POST['name'])){ $sname = $_POST['name']; } 
                  if(isset($_POST['rollno'])){ $roll = $_POST['rollno']; } 
                  if(isset($_POST['cls'])){ $class = $_POST['cls']; }
                  if(isset($_POST['address'])){ $addr = $_POST['address']; }

                  if(isset($_POST['se']))
                  {
                   $sel=$_POST['sel'];
                   $ty=$_POST['ty'];
                  }

                  if(isset($_POST['se']))
                   {
                    if($sel=="name")
                    {
                  $q1=mysqli_query($conn,"select * from dept where name='$ty'"); 

                    while($result=mysqli_fetch_array($q1))
                         { ?>
                       <tbody>
                        <tr>
                          <td><?php echo $result['name']; ?></td>
                          <td><?php echo $result['roll']; ?> </td>
                          <td><?php echo $result['class']; ?></td>
                          <td><?php echo $result['address']; ?></td>
                        </tr>
                      </tbody>  
                      <?php
                        }
                        }
                        if($sel=="rollno")
                          {
                        $q2=mysqli_query($conn,"select * from dept where roll='$ty'");

                    while($result=mysqli_fetch_array($q2))
                         { ?>
                       <tbody>
                        <tr>
                          <td><?php echo $result['name']; ?></td>
                          <td><?php echo $result['roll']; ?> </td>
                          <td><?php echo $result['class']; ?></td>
                          <td><?php echo $result['address']; ?></td>
                        </tr>
                      </tbody>  
                      <?php
                        }
                        }
                        if($sel=="cls")
                          {
                        $q3=mysqli_query($conn,"select * from dept where class='$ty'"); 

                    while($result=mysqli_fetch_array($q3))
                         { ?>
                       <tbody>
                        <tr>
                          <td><?php echo $result['name']; ?></td>
                          <td><?php echo $result['roll']; ?> </td>
                          <td><?php echo $result['class']; ?></td>
                          <td><?php echo $result['address']; ?></td>
                        </tr>
                      </tbody>  
                      <?php
                        }
                        }
                        if($sel=="address")
                          {
                        $q4=mysqli_query($conn,"select * from dept where address='$ty'"); 

                    while($result=mysqli_fetch_array($q4))
                         { ?>
                       <tbody>
                        <tr>
                          <td><?php echo $result['name']; ?></td>
                          <td><?php echo $result['roll']; ?> </td>
                          <td><?php echo $result['class']; ?></td>
                          <td><?php echo $result['address']; ?></td>
                        </tr>
                      </tbody>  
                      <?php
                        }
                        }
                      }
                    ?>
                 </table>
                </div>
                </div>
              </div>
              </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
<?php include '../../main/left.php';?>