<?php 
include("includes/head.php"); 
require_once('connect.php');

$message = array();
if(isset($_POST['register'])){
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$gender = $_POST['gender'];
	$phonenumber = $_POST['phonenumber'];
	$email = $_POST['email'];
	$idnumber = $_POST['idnumber'];
	$dob = $_POST['dob'];
	$address = $_POST['address'];
	$username = $_POST['username'];
	$passwd = $_POST['passwd'];
	$cpasswd = $_POST['cpasswd'];

	if(strlen($phonenumber)<10){
		echo "Please provide the valid number";
	}else if(strlen($idnumber)<16){
		echo "Please provide the valid number";

	}else if($passwd != $cpasswd){
		echo "Password doesn't match please provide try again";
	}else{
		$passwd = md5($passwd);
	$query = "INSERT INTO `customers` (`firstname`,`lastname`,`gender`,`phonenumber`,`email`,`idnumber`,`dob`,`address`,`username`,`password`)VALUES('$firstname','$lastname','$gender','$phonenumber','$email','$idnumber','$dob','$address','$username','$passwd')";
	$insert = $conn->query($query);

	if($insert){
		echo "Data inserted Successfull";
	}else{
		echo "data not inserted";
	}
	}

	




}
?>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6" style="padding-top: 10px;">
				<div class="card">
					<div class="card-body">
						<h3 class="text-center">Michouse</h3>
					</div><!--End of the first card body -->
				</div><hr>
			<div class="card">
				<div class="card-body">
					<h5 class="text-center">Registration</h5><hr>
					<form method="POST" action="">
					<div class="row">
						<div class="col-md-6">
							<h6 class="text-center">Firstname</h6>
								<input type="text" name="firstname" class="form-control">
							<h6 class="text-center">Lastname</h6>
								<input type="text" name="lastname" class="form-control">
							<h6 class="text-center">Gender</h6>
								<select class="form-control" name="gender">
									<option>Male</option>
									<option>Female</option>
								</select>
							<h6 class="text-center">Phone number</h6>
								<input type="text" name="phonenumber" class="form-control">
							<h6 class="text-center">Email</h6>
								<input type="text" name="email" class="form-control">
							<h6 class="text-center">Id Number</h6>
								<input type="text" name="idnumber" class="form-control">
						</div>
						<div class="col-md-6">
							<h6 class="text-center">Date Of Birth</h6>
								<input type="date" name="dob" class="form-control">
							<h6 class="text-center">Address</h6>
								<input type="text" name="address" class="form-control">
							<h6 class="text-center">Username</h6>
								<input type="text" name="username" class="form-control">
							<h6 class="text-center">Password</h6>
								<input type="password" name="passwd" class="form-control">
							<h6 class="text-center">Confirm Password</h6>
								<input type="password" name="cpasswd" class="form-control">
						</div>
					</div>
					<div class="form-group" style="padding-top: 2px;">
						<input type="submit" value="Register" name="register" class="form-control btn-primary">
					</div>
				</form><!-- End of The form -->
					<div class="form-inline my-2 my-lg-0 offset-md-10" align="right" >
						<a href="index.php">
							<input type="submit" value="Sign in" name="signin" class="form-control btn-primary">
						</a>
					</div>
				</div>
			</div>
	</div>
</body>
</html>