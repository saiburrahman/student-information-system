<?php 
session_start();
include '../../main/header.php'; 
include '../../../db_conn.php';
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
        	 $sname=$_REQUEST['name']; 
        	 $roll=$_REQUEST['rollno'];
        	 $class=$_REQUEST['cls'];
        	 $addr=$_REQUEST['address']; 
        	 $query="INSERT INTO dept (name, roll, class, address) values('".$sname."', '".$roll."', '".$class."', '".$addr."')";
        		
        		  if(!mysqli_query($conn,$query))
        		  {die ("An unexpected error occured while inserting the record, Please try again!");}
        		  else
        		 {
        		  echo "New record insert successfully!";}
        	 ?>
              </div> 
                <button type="submit" onclick="javascript: history.go(-1)" class="btn btn-primary">Back</button>
        	</div>
         </div>
        <!-- content-wrapper ends -->
<?php include '../../main/footer.php';?>