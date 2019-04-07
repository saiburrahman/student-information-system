<?php 
session_start();
include '../../../db_conn.php';
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
            <?php
				 $id=$_REQUEST['id'];	
				 $sname=$_REQUEST['name']; 
				 $roll=$_REQUEST['rollno'];
				 $class=$_REQUEST['cls'];
				 $addr=$_REQUEST['address']; 
				 
				 $query="UPDATE dept SET name='".$sname."', roll='".$roll."', class='".$class."', address='".$addr."' WHERE id='".$id."'";
					
					  if(!mysqli_query($conn,$query))
					  {die ("An unexpected error occured while saving the record, Please try again!");}
					  else
					 {
					  echo "Record updated successfully!";}
				 ?>
          </div>
          <button type="submit" onclick="javascript: history.go(-2)" class="btn btn-primary">Back</button>
        </div>
        <!-- content-wrapper ends -->
<?php include '../../main/footer.php';?>