<?php
	include('connection.php');
	session_start();
	if(isset($_POST['submit']))
	{		
			if($_POST['submit']=='SUBMIT')
			{
				$sql="SELECT user_email FROM donorlogin WHERE user_email='".$_POST['user_email']."' AND status=0 ";
				$result=mysqli_query($conn,$sql);
				$count=mysqli_num_rows($result);
				if($count > 0)
				{
					$_SESSION['user_email']=$_POST['user_email'];
				}
				else
				{
					echo "<script> alert('This Email is not registered on our system...!!');window.location='forgot_donor_password.php' </script>";
				}
			}
			else
			{
				$password=md5($_POST['password']);
				$user_email=$_SESSION['user_email'];
				$confirm_password=$_POST['confirm_password'];
				$sql="UPDATE donorlogin SET password='$password',confirm_password='$confirm_password' WHERE user_email='".$user_email."' ";
				$result=mysqli_query($conn,$sql);
				if ($password==$confirm_password) 
				{
					if($result)
					{
						echo "<script> alert('Your password was successfuly changed..!!!');window.location='login_donor.php' </script>";
						session_destroy();
					}
					else
					{
						echo "<script> alert('Something went wrong..!!!  Please Try again..!!!');window.location='forgot_donor_password.php' </script>";
						session_destroy();
					}
				}
				else
				{
					echo '<script> alert("Password & confirm_password does not match"); 
											window.location = " forgot_donor.php"; </script>';
				}

			}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS/styleforgotdonor.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style type="text/css">
		.error
		{
			color: red;
		}
	</style>
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
			<i class="fa fa-frown-o" aria-hidden="true"></i>
		</div>
		<div class="form">
			<form action="forgot_donor.php" method="post" id="myform">
			<p>New Password</p>
			<input type="password" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" id="password"  autocomplete="off">
			<p>Re-enter Password</p>
			<input type="text" name="confirm_password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" id="confirm_password"  autocomplete="off">
		</div>	
		<div class="button">
			<span class="btn">
				<input type="submit" name="submit" value="UPDATE">
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
