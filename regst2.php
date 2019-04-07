<?php
session_start();
include 'db_conn.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Student Information System</title>
  </head>
  <body>
  	<div class="container">
	  	<h1 align="center"><u>Student Manangement System</u></h1><br> 
		<h1 align="center" >Admin Panel</h1>
    <div class="center">
    <?php 
	 $sname=$_REQUEST['name']; 
	 $roll=$_REQUEST['rollno'];
	 $class=$_REQUEST['cls'];
	 $addr=$_REQUEST['address']; 
	 
	 // $link=mysqli_connect("localhost","root","") or die("Cannot Connect to the database!");
	 // mysqli_select_db("department",$link) or die ("Cannot select the database!");

	 $query="INSERT INTO dept (name, roll, class, address) values('".$sname."', '".$roll."', '".$class."', '".$addr."')";
		
		  if(!mysqli_query($conn,$query))
		  {die ("An unexpected error occured while saving the record, Please try again!");}
		  else
		 {
		  echo "New record saved successfully!";}
	 ?>
      </div> 
        <button type="submit" onclick="javascript: history.go(-1)" class="btn btn-primary">Back</button>
	 	<a href="./" class="btn btn-outline-success" >Home</a>
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
