<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS/styleforgotpassword.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

		<div class="header fix">
			<img src="Image\logo.png">
			<form>
				<div class="navbtn">
					<a href="login_donor.php"><input type="button" name="submit" value="Login"></a>
					<a href="registar_donor.php"><input type="button" name="reset" value="Become Donor"></a>
					<i class="fa fa-bars fa-2x " aria-hidden="true" ></i>
				</div>
			</form>
		</div>
			<div class="nav fix">
				<ul>
				<li><a href="index.php" >Home</a></li>
				<li><a href="blood_tips.php">Blood Tips</a></li>
				<li><a href="">Request Portal &nabla;</a>
					<ul>
						<li><a href="request_blood.php">Request Blood</a></li>
						<li><a href="pending_request.php">Show Pending Request</a></li>
					</ul>
				</li>
				<li><a href="">Event Portal &nabla;</a>
					<ul>
						<li><a href="registar_event.php">Register as a Event</a></li>
						<li><a href="login_event.php">Login as a Event</a></li>
					</ul>
				</li>
				<li><a href="contribute.php">Contribute</a></li>
				<li><a href="">More &nabla;</a>
					<ul>
						<li><a href="about_us.php">About Us</a></li>
						<li><a href="get_in_touch.php">Contact Us</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="heading fix">	
			<label>Forgot Password</label>
		</div>
	<div class="outerbox">
		<div class="image">
			<i class="fa fa-envelope-o" aria-hidden="true"></i>
		</div>
		<div class="form">
			<form action="forgot_event.php" method="post">
			<p>Email Id</p>
			<input type="text" name="user_email" required  autocomplete="off">
		</div>	
		<div class="button">
			<span class="btn">
				<input type="submit" name="submit" value="SUBMIT">
			</span>
			</form>
		</div>
	</div>
		<?php
	      include 'footer.php';
	    ?>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/additional-methods.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
jQuery.validator.addMethod("checkemail", function(value, element) {
  // allow any non-whitespace characters as the host part
  return this.optional( element ) || /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i.test( value );
}, 'Please enter a valid email address.');






$(document).ready(function () {

    $('#myform').validate({ 
        rules: {
            password:{
            	required:true,
            	minlength:6,
            	maxlength:15,

            },
            confirm_password:{
            	required:true,
            	minlength:6,
            	maxlength:15,
            	equalTo: "#password",


            },  
        },
        messages:{
        	
			password:{
				required:"password is required",
				minlength:"enter password between 7-15",
				maxlength:"enter password between 7-15",
			},
			confirm_password:{
				required:"password is required",
				minlength:"enter password between 7-15",
				maxlength:"enter password between 7-15",
				equalTo:"password must be same",


			},
			
        },
    });

});
</script>

</html>
