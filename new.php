<!DOCTYPE html>
<html>
<head>
	<title>NewAdmin</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link rel="stylesheet" type="text/css" href="navStyle.css">
</head>
<body>
	<div>
	<nav class="navbar navbar-inverse">
		<div class="container">
			 <div class="navbar-header">
			 	<a href="new.php" class="navbar-brand ">Home</a>
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
			 </ul>

			<ul class="nav navbar-nav navbar-right">
			</ul>
		</div>
		</div>
	</nav>
	</div>
	<div class="jumbotron " style="background: url(images/10.jpg); background-size: cover; height: 400px;background-position: center center">
		
	</div>
<!-- //From here we are adding files again -->

		<div class="col-lg-3 col-md-6 padding">
				<div class="list-group">
					<a href="patients.php" class="list-group-item active" style="background-color: rgb(32,57,53)"> <h1><i class="fa fa-wheelchair" aria-hidden="true"></i>
		 Patients</h1></a>
					
				</div>	 
		</div>	


		<div class="col-lg-3 col-md-6 padding">
		<div class="list-group">
			<a href="doctors.php" class="list-group-item active" style="background-color: rgb(32,57,53)"> <h1><i class="fa fa-user-md" aria-hidden="true"></i> Doctors</h1></a>
		</div>	 
		</div>

		<div class="col-lg-3 col-md-6 padding">
		<div class="list-group">
			<a href="staffs.php" class="list-group-item active" style="background-color: rgb(32,57,53)"> <h1> <i class="fa fa-users" aria-hidden="true"></i> Staffs</h1></a>
			
		</div>
		</div>

		<div class="col-lg-3 col-md-6 padding">
			<div class="list-group">
				<a href="departments.php" class="list-group-item active" style="background-color: rgb(32,57,53)"> <h1><i class="fa fa-university" aria-hidden="true"></i>Department</h1></a>
			</div>	
		</div>

		<div class="col-lg-3 col-md-6 padding">
			<div class="list-group">
				<a href="" class="list-group-item active" style="background-color: rgb(32,57,53)"> <h1><i class="fa fa-medkit" aria-hidden="true"></i> Pharmacy </h1></a>	
			</div>	
		</div>


		<div class="col-lg-3 col-md-6 padding">
			<div class="list-group">
				<a href="" class="list-group-item active" style="background-color: rgb(32,57,53)"> <h1><i class="fa fa-tint" aria-hidden="true"></i> Blood Bank</h1></a>
					
			</div>	
		</div>


		<div class="col-lg-3 col-md-6 padding">
			<div class="list-group">
				<a href="" class="list-group-item active" style="background-color: rgb(32,57,53)"> <h1><i class="fa fa-money" aria-hidden="true"></i>  Billing </h1></a>
					
			</div>	
		</div>





<div class="col-lg-12 padding ">
		<div class="card">
			
			<a href="" class="list-group-item active" style="background-color: rgb(32,57,53)"> <center><h2 class=" container"><i class="fa fa-address-card" aria-hidden="true"></i>   Create an appoinment</h2></center></a>
			<div class="card-body">

				<form class="form-group container" action="func.php" method="post">
					<label>First Name :</label>
					<input type="text" name="first_name" class="form-control"><br>

					<label>Last Name :</label>
					<input type="text" name="last_name" class="form-control"><br>
					
					<label>Email :</label>
					<input type="email" name="email" class="form-control"><br>

					<label>Contact :</label>
					<input type="number" name="contact" class="form-control"><br>

					<label>Appointment With</label>
					<input type="text" name="docapp" class="form-control"><br>
					<label>Date And Time</label>
					<input type="datetime-local" name="date_and_time" class="form-control"><br>


					</select> <br>
					<input type="submit" class="btn btn-primary" name="rat_submit" value="Enter Appoinment">
					
				</form>
			</div>
		</div>	
	</div>















	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
