<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<style type="text/css">
  #ab1 : hover {cursor: pointer;}
</style>

<body style="background: url('images/4.jpg'); no-repeat; background-size: cover; opacity: 1.5; ">
  <center>
<div class="container" style="width: 425px;margin-top :180px; margin-right: 0px ">
  <div class="card">
    <img src="images/1.jpg" class="card-img-top">
    <div class="card-body">
<form class="form-group" action="func.php" method="post">
	<label>Username :</label> <br>
  <input type="username" name="username" class="from-control" placeholder="Enter Username"> <br>
  <label>Password : </label><br>
  <input type="password" name="password" class="from-control"  placeholder="Enter password"> <br>
  <input type="submit" name="login_submit" id ="ab1" class="btn btn-primary">
</form>
</div>
</div>
</div>
</center>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>