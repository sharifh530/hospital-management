<?php

$con = mysqli_connect("localhost","root","","hospital_management");
if (isset($_POST['delete-doc'])) {

$doc_id =$_POST['doc_id'];

$query = "delete from add_doc where doc_id='$doc_id' ";
$result =mysqli_query($con,$query);

if ($result) {
		echo "<script> alert ('Doctor Removed') </script>";
    	echo "<script> window.open('doctors.php','_self')</script>";
}
else 
{
	echo "<script> alert ('Patient cannot be deleted') </script>";
    echo "<script>window.open('delete-doc.php','_self')</script>";
}
}

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Remove Doctor</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link rel="stylesheet" type="text/css" href="navStyle.css">

	  <style type="text/css">
	  	.padding{
	  		padding-top: 20px;
	  		padding-bottom: 30px;
	  	}
	  	.alignmiddle{
	  	text-align: center;
	  	}

	  </style>
</head>
<body>
<nav class="navbar navbar-inverse">
		<div class="container">
			 <div class="navbar-header">
			 	<a href="admin_panel.php" class="navbar-brand ">Home</a>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
			 </div>
			 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			 <ul class="nav navbar-nav">
				 	<li><a href="patients.php">Patient</a></li>
				 	<li><a href="doctors.php">Doctor</a></li>
				 	<li><a href="departments.php">Department</a></li>
				 	<li><a href="staffs.php">Staffs</a></li>
			 </ul>

			<ul class="nav navbar-nav navbar-right">
			</ul>
		</div>
		</div>
	</nav>

<div class="jumbotron " style="background: url(images/14.jpg); background-size: cover; height: 450px;background-position: center center">
		
	</div>
<div class="container-fluid">
	<div class="col-lg-12  ">
		<div class="card">
		
			
			<a href="" class="list-group-item active" style="background-color: rgb(32,57,53)"> <h2 class="alignmiddle container"><i class="fa fa-address-card" aria-hidden="true"></i> Remove Doctor </h2></a>
			<div class="card-body">

				<form class="form-group" action="delete-doc.php" method="post">
					<label>Enter Doctor Id To Discharge :</label>
					<input type="number" name="doc_id" class="form-control"><br>

					<input type="submit" oneclick="return Confrim('are you sure?')" class="btn btn-primary" name="delete-doc" value="Remove">
					
				</form>

				


			</div>
		</div>			 
	</div>
	</div>	

</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>