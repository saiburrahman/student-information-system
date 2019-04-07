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
  <?php 
//session_start();
if(isset($_POST["sb"]))
{
	     $pass = mysqli_real_escape_string($conn,trim($_POST["pass"]));
	 	 $link=mysqli_connect("localhost","root","") or die("Cannot Connect to the database!");
	
	 mysqli_select_db($link,"department") or die ("Cannot select the database!");
	 $query="SELECT * FROM admin";
		
		  $resource=mysqli_query($link,$query);
		while($result=mysqli_fetch_array($resource,MYSQLI_NUM))
		{ 
		 if( $result[1] == md5($pass))
		  {			  
			 header('Location: ./admin/index.php');
			 $_SESSION["admin"]="admin";
		  }
		 
		  
		} 
}
?>
  <body>
  	<script type="text/javascript">
		function validate()
		{
			if( document.form1.pass.value == "" )
		   {
		     alert( "enter password!" );
		     return false;
		   }
		   }

</script>
    <div class="container">
      <h1 align="center"><u>Student Manangement System</u></h1><br> 

      <form id="form1" name="form1" method="post" action="login.php " onsubmit="return (validate());">
	  <div class="form-group col-6">
	    <label for="exampleInputPassword">Password</label>
	    <input type="password" class="form-control" name="pass" id="exampleInputPassword" placeholder="Password">
	  </div>
	  <button type="submit" name="sb" id="sb" class="btn btn-primary">Submit</button>
	  <a href="./" class="btn btn-outline-success">Back</a>
	</form>
     
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>