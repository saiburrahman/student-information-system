<?php 
session_start();
include '../../../db_conn.php';
include '../../main/header.php'; 
if(!isset($_SESSION["admin"]))
{
	header('Location: ../../../index.php');
}
?>
<script type="text/javascript">
function validate()
{
	if( document.form1.name.value == "" )
   {
     alert( "Please provide your name!" );
     return false;
   }
   
   else if( document.form1.rollno.value == "" )
   {
     alert( "Please provide your rollno!" );
     return false;
   }
   
   else if (document.form1.cls.value=="0") {
	alert("Please select your class.")
	return false
}
   
   else if( document.form1.address.value == "" )
   {
     alert( "Please provide your address!" );
     return false;
   }
   return( true );
}
</script>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
          		<?php 
                 $id=$_GET['id']; 
                 $query="SELECT * FROM dept WHERE id='$id'";

                  $resource=mysqli_query($conn,$query) or die ("An unexpected error occured while <b>editing</b> the record, Please try again!");
		  			$result=mysqli_fetch_array($resource);
                 ?>
	            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 grid-margin stretch-card">
	              <div class="container">
	                  <form name="form1" method="post" action="modify3.php"  onsubmit="return (validate());">
	                  	<div class="form-group">
	                      <input type="hidden" name="id" value="<?php echo $result['id'] ?>"  />
	                    </div>
	                    <div class="form-group">
	                      <label for="studentName">Student Name</label>
	                      <input type="text" class="form-control" name="name" value="<?php echo $result['name'] ?>" id="studentName" aria-describedby="nameHelp" placeholder="Student Name">
	                      <small id="nameHelp" class="form-text text-muted">Please enter your full name.</small>
	                    </div>
	                    <div class="form-group">
	                      <label for="studentRollNumber">Student Roll</label>
	                      <input type="text" class="form-control" name="rollno" value="<?php echo $result['roll'] ?>" id="studentRollNumber" placeholder="Student Roll">
	                    </div>
	                    <div class="form-group">
	                      <label for="studentDepartment">Student Department</label>
	                      <input name="cls"  value="<?php echo $result['class'] ?>" >
	                      <select class="form-control" name="cls"  id="studentDepartment">
	                        <option selected>select Department</option>
	                        <option value="CSE">Computer Science & Engineering</option>
	                        <option value="EEE">Electrical and Electronics Engineering</option>
	                        <option value="BBA">Bachelor of Business Administration</option>
	                      </select>
	                    </div>
	                    <div class="form-group">
	                      <label for="address">Address</label>
	                      <input type="text" class="form-control" name="address" value="<?php echo $result['address'] ?>" id="address" placeholder="Address">
	                    </div>
	                    <button type="submit" name="button" class="btn btn-primary">Save</button>
	                    <a href="modify.php" class="btn btn-outline-success">Back</a>
	                  </form>
              		</div>
	           </div> 
            </div>
        </div>
        <!-- content-wrapper ends -->
<?php include '../../main/footer.php';?>