<!DOCTYPE html>
<html>
<head>
	<title>Michouse</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/base.css">

	<!-- Bellow are for the Javascript Stuff-->
	<script src="js/jquery.js"></script> 
    <script src="js/popper.min.js"></script>   
    <script src="js/bootstrap.js"></script>
    <script type="text/javascript" src="./fbapp/fb.js"></script>
    <style type="text/css">
    	body{

    	}
    </style>

</head>

<body>
	<div class="container">
		<div class="row">
	<div class="col-md-4"></div>
		<div class="col-md-4">
			<h2 class="text-center">Welcome</h2>
		</div>
		<div class="col-md-4">
			<div class="fb-login-button" data-scope="public_profile,email" onlogin="checkLoginState();"></div>
		</div>
		</div>
	</div>
</body>

</html>