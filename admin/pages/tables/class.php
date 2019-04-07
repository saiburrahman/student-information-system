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
 			<ul style=" list-style-type: none";>
              	  <li><a href="class1.php"><LABEL class="btn btn-inverse-primary btn-rounded btn-fw
              	  	">View All Department Student</LABEL></a></li>	
              	 <li><a href="class2.php"><LABEL class="btn btn-inverse-secondary btn-rounded btn-fw
              	  	">Department of CSE Student</LABEL></a></li>
              	 <li><a href="class3.php"><LABEL class="btn btn-inverse-light btn-rounded btn-fw">Department of EEE Student</LABEL></a></li>
              	 <li><a href="class4.php"><LABEL class="btn btn-inverse-dark btn-rounded btn-fw">Department of BBA Student</LABEL></a></li>
 			</ul>    
          </div>
        </div>
        <!-- content-wrapper ends -->
<?php include '../../main/footer.php';?>