<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Create Appointment</title>
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
<script> 
function displayCalendar(){
 
 
 var htmlContent ="";
 var FebNumberOfDays ="";
 var counter = 1;
 
 
 var dateNow = new Date();
 var month = dateNow.getMonth();

 var nextMonth = month+1; //+1; //Used to match up the current month with the correct start date.
 var prevMonth = month -1;
 var day = dateNow.getDate();
 var year = dateNow.getFullYear();
 
 
 //Determing if February (28,or 29)  
 if (month == 1){
    if ( (year%100!=0) && (year%4==0) || (year%400==0)){
      FebNumberOfDays = 29;
    }else{
      FebNumberOfDays = 28;
    }
 }
 
 
 // names of months and week days.
 var monthNames = ["January","February","March","April","May","June","July","August","September","October","November", "December"];
 var dayNames = ["Sunday","Monday","Tuesday","Wednesday","Thrusday","Friday", "Saturday"];
 var dayPerMonth = ["31", ""+FebNumberOfDays+"","31","30","31","30","31","31","30","31","30","31"]
 
 
 // days in previous month and next one , and day of week.
 var nextDate = new Date(nextMonth +' 1 ,'+year);
 var weekdays= nextDate.getDay();
 var weekdays2 = weekdays
 var numOfDays = dayPerMonth[month];
     
 
 
 
 // this leave a white space for days of pervious month.
 while (weekdays>0){
    htmlContent += "<td class='monthPre'></td>";
 
 // used in next loop.
     weekdays--;
 }
 
 // loop to build the calander body.
 while (counter <= numOfDays){
 
     // When to start new line.
    if (weekdays2 > 6){
        weekdays2 = 0;
        htmlContent += "</tr><tr>";
    }
 
 
 
    // if counter is current day.
    // highlight current day using the CSS defined in header.
    if (counter == day){
        htmlContent +="<td class='dayNow'  onMouseOver='this.style.background=\"#FF0000\"; this.style.color=\"#FFFFFF\"' "+
        "onMouseOut='this.style.background=\"#FFFFFF\"; this.style.color=\"#00FF00\"'>"+counter+"</td>";
    }else{
        htmlContent +="<td class='monthNow' onMouseOver='this.style.background=\"#FF0000\"'"+
        " onMouseOut='this.style.background=\"#FFFFFF\"'>"+counter+"</td>";    
 
    }
    
    weekdays2++;
    counter++;
 }
 
 
 
 // building the calendar html body.
 var calendarBody = "<table class='calendar'> <tr class='monthNow'><th colspan='7'>"
 +monthNames[month]+" "+ year +"</th></tr>";
 calendarBody +="<tr class='dayNames'>  <td>Sun</td>  <td>Mon</td> <td>Tues</td>"+
 "<td>Wed</td> <td>Thurs</td> <td>Fri</td> <td>Sat</td> </tr>";
 calendarBody += "<tr>";
 calendarBody += htmlContent;
 calendarBody += "</tr></table>";
 // set the content of div .
 document.getElementById("calendar").innerHTML=calendarBody;
 
}
</script> 
</head> 
 
<body onload="displayCalendar()"> 
 
<div id="calendar"></div> 
</body> 
<style> 
.monthPre{
 color: gray;
 text-align: center;
 width: 214px;height: 35px;

}
.monthNow{
 color: blue;
 text-align: center;
 width: 214px;height: 35px;

}
.dayNow{
 border: 2px solid black;
 color: #FF0000;
 text-align: center;
 width: 214px;height: 35px;
 background-color: #0b394c;

}
.calendar td{
 htmlContent: 2px;
 width: 214px;height: 35px;

}
.monthNow th{
 background-color: #0b394c;
 color: #FFFFFF;
 text-align: center;
 width: 214px;height: 55px;


}
.dayNames{
 background: #0FF000;
 color: #FFFFFF;
 text-align: center;
 width: 214px;height: 35px;

}
 
</style> 




<div class="container-fluid">
	<div class="col-lg-12  ">
		<div class="card">
			
			<a href="" class="list-group-item active" style="background-color: rgb(32,57,53)"> <center><h2 class=" container"><i class="fa fa-address-card" aria-hidden="true"></i>   Create An Appointment</h2></center></a>
			<div class="card-body">

				<form class="form-group container" action="func.php" method="post">
					<label>Appointment ID :</label>
					<input type="number" name="app_id" class="form-control"><br>

					<label>Patient Id :</label>
					<input type="number" name="pat_id" class="form-control"><br>

					<label>Patient Name :</label>
					<input type="text" name="name" class="form-control"><br>

					<label>Gender :</label>
					<select name ="gender" class="form-control">
						<option value="Male"> Male</option>
						<option value="Female">Female</option>
					</select><br>
					
					<label>Email :</label>
					<input type="email" name="email" class="form-control"><br>

					<label>Contact :</label>
					<input type="number" name="contact" class="form-control"><br>

					<label>Disease :</label>
					<input type="text" name="disease" class="form-control"><br>

					<label>Patient Type :</label>
					<select name ="pat_type" class="form-control">
						<option value="Inpatient"> Inpatient </option>
						<option value="OutPatient"> Outpatient </option>
					</select><br>

					<label>Appointment With : </label>
					<input type="text" name="doc_name" class="form-control"><br>

					<label>Date And Time</label>
					<input type="datetime-local" name="date_and_time" class="form-control"><br>


					</select> <br>
					<input type="submit" class="btn btn-primary" name="app_submit" value="Enter Appoinment">
					
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