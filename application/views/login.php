<div class="wrapper">
<!DOCTYPE html>
<html lang="en">
<head>
	<title>BDDDDO.com</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url();?>dist3/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>dist3/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>dist3/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>dist3/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>dist3/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>dist3/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>dist3/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>dist3/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">

			<div class="wrap-login100">

				<div class="login100-pic js-tilt" data-tilt>
					
					<img style="height: 250px;" src="<?php echo base_url();?>dist/img/oro.PNG" class="img-circle" alt="User Image">
					<b><i></i></b>
                  </div>
                        <form class="login100-form validate-form" method="POST" action="<?php echo base_url('structure/checkuser');?>">

				<!-- <form class="login100-form validate-form" method="POST" action="<?php echo base_url('Stuructu/checkuser');?>"> -->
					<span class="login100-form-title">
						Member Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "invalid Username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" href="<?php echo base_url('usercontroller/checkuser')?>" type="submit">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="<?php echo base_url();?>dist3/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>dist3/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url();?>dist3/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>dist3/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>dist3/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>dist3/js/main.js"></script>

</body>
</html>