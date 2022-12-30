<?php
include '../Controler/Controler.php';
include '../Connect/Connect.php';
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Register</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<h2>Welcome</h2>
								<p>You have a account?</p>
								<a href="index.php" class="btn btn-white btn-outline-white">log in</a>
							</div>
			      </div>
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Register</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>
							<form action="Register.php" class="signin-form" method="post" enctype="multipart/form-data">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Username</label>
			      			<input name="username" type="text" class="form-control" placeholder="Username"  value="<?=htmlentities($Username)?>">
                            <div  class="text-danger"><?=$Msg['username']?></div>
			      		</div>
                                <div class="form-group mb-3">
			      			<label class="label" for="name">Email</label>
                                    <input name="email" type="email" class="form-control" placeholder="Enter Your Email" value="<?=htmlentities($Email)?>" >
                                    <div class="text-danger"><?=$Msg['email']?></div>
                                </div>
		            <div class="form-group mb-3">
		            	<label class="label" >Profle Photo</label>
		              <input name="file" type="file">
                        <div class="alert-danger"><?=$Msg['file']?></div>
                            </div>
                                <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
		              <input name="password" type="password" class="form-control" placeholder="Password" value="<?=htmlentities($Password)?>" >
                                    <div  class="text-danger"><?=$Msg['password']?></div>

                                        </div>
		            <div class="form-group">
		            	<button type="submit" name="submit" value="submit1" class="form-control btn btn-primary submit px-3">Register</button>
		            </div>
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

