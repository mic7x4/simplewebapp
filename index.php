<?php 
include("includes/head.php"); 
require_once('connect.php');
?>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6" style="padding-top: 90px;">
				<div class="card">
					<div class="card-body">
						<h3 class="text-center">Michouse</h3>
					</div><!--End of the first card body -->
				</div><hr>
				<div class="card">
					<div class="card-body">
						<h4 class="text-center">User Login</h4><hr>
						<form class="form" method="POST" action="">
							<div class="form-group">
								<input type="text" name="username" placeholder="Username" class="form-control">
							</div>
							<div class="form-group">
								<input type="password" name="password" placeholder="Password" class="form-control">
							</div>
							<div class="form-group">
								<input type="submit" value="Login" name="submit" class="form-control btn-primary">
							</div>
						</form>
					<div class="form-inline my-2 my-lg-0 offset-md-4" align="right" >
		                 <a href="register.php" class="form-control mr-sm-2 btn-sm"><img src="icons/signup.png"> Sign Up </a>
		                 <a href="#" class="form-control mr-sm-2 btn-sm"><img src="icons/authorized.png">Authorized Login </a>
              		</div>
				
					</div>
					</div><!--End of the second card body -->
			</div>
			<div class="col-md-3"></div>

		</div>
	</div>
</body>
</html>