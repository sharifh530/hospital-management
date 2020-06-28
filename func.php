
<?php

$con = mysqli_connect("localhost","root","","hospital_management");
if (isset($_POST['login_submit'])) {
$username =$_POST['username'];
$password =$_POST ['password'];

$query = "select * from login_table where Username='$username' and Password='$password'";
$result =mysqli_query($con,$query);
if (mysqli_num_rows($result)==1) {
	header("Location:admin_panel.php");
	
}
else 
{

	echo "<script> alert ('Enter Correct Details') </script>";
    echo "<script>window.open('admin.php','_self')</script>";
}
}

if (isset($_POST['rat_submit'])) {
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$email=$_POST['email'];
	$contact=$_POST['contract'];
	$docapp=$_POST['docapp'];
	$date_and_time=$_POST['date_and_time'];

	
	$query ="insert into create_appoinment(first_name,last_name,email,contract,docapp,date_and_time) values('$first_name','$last_name','$email','$contact','$docapp','$date_and_time')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo "<script> alert ('Appointment Registered') </script>";
    	echo "<script> window.open('admin_panel.php','_self')</script>";
	}
}

if (isset($_POST['pat_submit'])){

	$pat_id=$_POST['pat_id'];
	$pat_name=$_POST['pat_name'];
	$gender=$_POST['gender'];
	$contact_no=$_POST['contact_no'];
	$blood_group=$_POST['blood_group'];
	$doc_id=$_POST['doc_id'];
	$dep_id=$_POST['dep_id'];

$query ="insert into patient(pat_id,pat_name,gender,contact_no,blood_group,doc_id,dep_id) values('$pat_id','$pat_name','$gender','$contact_no','$blood_group','$doc_id','$dep_id')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo "<script> alert ('Patient Registered') </script>";
    	echo "<script> window.open('patients.php','_self')</script>";
	}

}

if (isset($_POST['dep_submit'])){

	$dep_id = $_POST['dep_id'];
	$dep_name = $_POST['dep_name'];
	$building=$_POST['building'];

$query ="insert into add_dep(dep_id,dep_name,building) values('$dep_id','$dep_name','$building')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo "<script> alert ('Department Registered') </script>";
    	echo "<script> window.open('departments.php','_self')</script>";
	}
	

}




if (isset($_POST['doc_submit'])){

	$doc_id = $_POST['doc_id'];
	$doc_name = $_POST['doc_name'];
	$gender=$_POST['gender'];
	$contact=$_POST['contact'];
	$dep_id=$_POST['dep_id'];


$query ="insert into add_doc(doc_id,doc_name,gender,contact,dep_id) values('$doc_id','$doc_name','$gender','$contact','$dep_id')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo "<script> alert ('Doctor Registered') </script>";
    	echo "<script> window.open('doctors.php','_self')</script>";
	}
	

}


if (isset($_POST['st_submit'])){

	$staff_id = $_POST['staff_id'];
	$staff_name = $_POST['staff_name'];
	$gender=$_POST['gender'];
	$contact=$_POST['contact'];
	$dep_name=$_POST['dep_name'];
	$room_id=$_POST['room_id'];



$query ="insert into add_staff(staff_id,staff_name,gender,contact,dep_name,room_id) values('$staff_id','$staff_name','$gender','$contact','$dep_name','$room_id')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo "<script> alert ('Staff Registered') </script>";
    	echo "<script> window.open('staffs.php','_self')</script>";
	}
	

}


if (isset($_POST['room_submit'])){

	$room_id = $_POST['room_id'];
	$room_type = $_POST['room_type'];
	$room_status = $_POST['room_status'];
	$dep_id=$_POST['dep_id'];
	



$query ="insert into add_room(room_id,room_type,room_status,dep_id) values('$room_id','$room_type','$room_status','$dep_id')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo "<script> alert ('Room Registered') </script>";
    	echo "<script> window.open('room.php','_self')</script>";
	}
	

}

if (isset($_POST['donor_submit'])){

	$donor_id=$_POST['donor_id'];
	$donor_name=$_POST['donor_name'];
	$gender=$_POST['gender'];
	$contact=$_POST['contact'];
	$address=$_POST['address'];
	$blood_group=$_POST['blood_group'];	
	$pre_date=$_POST['pre_date'];


$query ="insert into add_donor(donor_id,donor_name,gender,contact,address,blood_group,pre_date) values('$donor_id','$donor_name','$gender','$contact','$address','$blood_group','$pre_date')";
	$result=mysqli_query($con,$query);

	if($result)
	{
		echo "<script> alert ('Donor Registered') </script>";
    	echo "<script> window.open('blood.php','_self')</script>";
	}
	

}

if (isset($_POST['bill_submit'])){

	$bill_id=$_POST['bill_id'];
	$pat_id=$_POST['pat_id'];
	$pat_type=$_POST['pat_type'];
	$doc_crg=$_POST['doc_crg'];
	$med_crg=$_POST['med_crg'];
	$room_crg=$_POST['room_crg'];
	$ot_crg=$_POST['ot_crg'];
	$nur_crg=$_POST['nur_crg'];
	$total_crg=$_POST['total_crg'];

	

$query ="insert into bill(bill_id,pat_id,pat_type,doc_crg,med_crg,room_crg,ot_crg,nur_crg,total_crg) values('$bill_id','$pat_id','$pat_type','$doc_crg','$med_crg','$room_crg','$ot_crg','$nur_crg','$total_crg')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo "<script> alert ('Bill Made') </script>";
    	echo "<script> window.open('bill.php','_self')</script>";
	}

}

if (isset($_POST['app_submit'])) {

	$app_id=$_POST['app_id'];
	$pat_id=$_POST['pat_id'];
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$disease=$_POST['disease'];
	$pat_type=$_POST['pat_type'];
	$doc_name=$_POST['doc_name'];
	$date_and_time=$_POST['date_and_time'];

	
	$query ="insert into create_appoinment(app_id,pat_id,name,gender,email,contact,disease,pat_type,doc_name,date_and_time) values('$app_id','$pat_id','$name','$gender','$email','$contact','$disease','$pat_type','$doc_name','$date_and_time')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo "<script> alert ('Appointment Registered') </script>";
    	echo "<script> window.open('appoinment.php','_self')</script>";
	}
}



 ?>