<?php

try {	
$con = mysqli_connect("localhost","root","","hospital_management");
}
catch (Exception $e) {
	echo "Could not connect to the database.";
	exit;
}
