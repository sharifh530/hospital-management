<?php

include_once "connection.php";

$donor_list=mysqli_query($con,"select * from add_donor");
mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Donor details</title>
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

<div class="jumbotron " style="background: url(images/27.jpg); background-size: cover; height: 450px;background-position: center center">
		
	</div>

<div class="container-fluid">	
	
<div class="col-lg-12 col-md-6 padding padding-bottom">
		<div class="list-group">
			<center><a href="donor-list.php" class="list-group-item active" style="background-color: rgb(32,57,53)"> <h1><i class="fa fa-tint" aria-hidden="true"></i>
 Donor Details</h1></a></center>
			
		</div>
		 
	

<p><center> <h2>Welcome to the Donor list here </h2></center></p>
<div>
	<center>
<table>
	<!-- <thead>
		<th>SL no.            </th>
		<th>First name        </th>
		<th>Last name         </th>
		<th>Email             </th>
		<th>Appointment       </th>
		<th>Date              </th>
	</thead> -->
		<tr class="boldtext">
			<td>SL No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
			<td>Donor Id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td> Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>Contact Number &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>Blood Group &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>Previous Blood Donation Date</td>
		</tr>
	
	<?php 
	$sl_no=1;
	foreach ($donor_list as $donor_list) { ?>

	<tr>
		<td><?php echo $sl_no; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td ><?php echo $donor_list['donor_id'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td><?php echo $donor_list['donor_name']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td><?php echo $donor_list['gender']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td><?php echo $donor_list['contact']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td><?php echo $donor_list['address']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td><?php echo $donor_list['blood_group']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td><?php echo $donor_list['pre_date']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

	</tr>

	<?php

	$sl_no++;

	 }; ?>

</tbody>
</table>
</center>
</div>
</div>
</div>
</div>
</body>
</html>