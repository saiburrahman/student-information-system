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

              <?php 
                 $id=$_GET['id']; 
                 $query="DELETE FROM dept WHERE id='$id'";
                  
                    if(!mysqli_query($conn,$query))
                    {die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");}
                    else
                   {
                    echo " removed successfully!";}
                 ?>
           <a href="delete.php" class="btn btn-outline-success">Back</a>      
          </div>
        </div>        
        <!-- content-wrapper ends -->
<?php include '../../main/footer.php';?>