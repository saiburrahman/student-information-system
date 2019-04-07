<?php 
session_start();
include '../../main/header.php'; 
if(!isset($_SESSION["admin"]))
{
  header('Location: ../../../index.php');
}
?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 grid-margin stretch-card">
               <div class="container">
                  <form name="form1" method="post" action="regst2.php"  onsubmit="return (validate());">
                    <div class="form-group">
                      <label for="studentName">Student Name</label>
                      <input type="text" class="form-control" name="name" id="studentName" aria-describedby="nameHelp" placeholder="Student Name">
                      <small id="nameHelp" class="form-text text-muted">Please enter your full name.</small>
                    </div>
                    <div class="form-group">
                      <label for="studentRollNumber">Student Roll</label>
                      <input type="text" class="form-control" name="rollno" id="studentRollNumber" placeholder="Student Roll">
                    </div>
                    <div class="form-group">
                      <label for="studentDepartment">Student Department</label>
                      <select class="form-control" name="cls" id="studentDepartment">
                        <option selected>select Department</option>
                        <option value="CSE">Computer Science & Engineering</option>
                        <option value="EEE">Electrical and Electronics Engineering</option>
                        <option value="BBA">Bachelor of Business Administration</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="address">Address</label>
                      <input type="text" class="form-control" name="address" id="address" placeholder="Address">
                    </div>
                    <button type="submit" name="button" class="btn btn-primary">Submit</button>
                    
                  </form>
              </div>

            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
<?php include '../../main/footer.php'; ?>