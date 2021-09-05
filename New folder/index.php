<!DOCTYPE html>
<html>
<head>
	<title>Form php</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>


	<div class="container">

	<div class="col-md-12" style="background-color: green; text-align: center;color: white;">
		<h2>PHP Operation</h2>
	</div>

	 <h1>Insert </h1>

<form action="" method="POST">
	<div class="col-md-6">
	   <label>Name</label>
	   <input type="text" name="username" class="form-control"></br>
	</div>



	<div class="col-md-6">
	   <label>Email</label>
	   <input type="text" name="email" class="form-control"></br>
	</div>


	<div class="col-md-6">
	   <label>Phone</label>
	   <input type="text" name="phone" class="form-control">
	</div>


	<div class="col-md-6" style="margin-bottom: 20px;">
	   <label>Password</label>
	   <input type="text" name="password" class="form-control">
	</div>


	<div class="col-md-12" style="margin-bottom: 10px;">
	   <input type="submit" name="submit" value="Submit" class="btn btn-primary " style="width: 100%;">
	</div>

</form>

<?php
   if(isset($_POST['submit'])){
   	$username = $_POST['username'];
   	$email = $_POST['email'];
   	$phone = $_POST['phone'];
   	$password = $_POST['password'];
   }
?>

<div style="text-align: center;">
	<h2 style="font-weight: bold;">Input Data</h2>
<h3> Name: <?php if(isset($username)){
	echo $username;
} ?></h3>
<h3> Email: <?php if(isset($email)){
	echo $email;
} ?></h3>
<h3> Phone: <?php if(isset($phone)){
	echo $phone;
} ?></h3>
<h3> Password: <?php if(isset($password)){
	echo $password;
} ?></h3>

</div>

</div>

</body>
</html>
