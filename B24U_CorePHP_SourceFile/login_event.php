<?php
	session_start();
	include('connection.php');
	error_reporting(1);

	if(isset($_POST['submit']))
	{
		$user_email = $_POST['user_email'];
		$password = md5($_POST['password']);

		$query = "SELECT * FROM eventlogin WHERE user_email='$user_email' AND password='$password' AND status=0 ";
		$result = mysqli_query($conn,$query);
		$count = mysqli_num_rows($result);
		if ($result)
		{
		 	
			if( $count == 1 )
			{
				$row = mysqli_fetch_array($result);
				$_SESSION['id'] = $row['id'];
				$_SESSION['password']=$row['confirm_password'];
				$_SESSION['confirm_password']=$row['confirm_password'];
				$_SESSION['pincode']=$row['pincode'];
				$_SESSION['state']=$row['state'];
				$_SESSION['need']=$row['need'];
				$_SESSION['other_message']=$row['other_message'];
				$_SESSION['old_email']=$row['user_email'];
				$_SESSION['event_address']=$row['event_address'];
				$_SESSION['user_full_name'] = $row['user_full_name'];
				$_SESSION['user_email'] = $row['user_email'];
				$_SESSION['user_number'] = $row['user_number'];
				$_SESSION['event_date_a'] = $row['event_date'];
				$date_of_birth=$row['event_date'];
				$dated=date('d',strtotime($date_of_birth));
				$datem=date('m',strtotime($date_of_birth));
				$datey=date('Y',strtotime($date_of_birth));
				$_SESSION['event_date'] = $dated.'-'.$datem.'-'.$datey;
				$_SESSION['start_time'] = $row['start_time'];
				$_SESSION['end_time'] = $row['end_time'];
				$_SESSION['city'] = $row['city'];
				echo "<script> alert('Welcome ...!!!! '); 
				 window.location = 'event_status.php';
				</script>";
			}
			else
			{
				echo "<script> alert('Username/password Combination does not match.');window.location='login_event.php'; </script>";
			}
		}
	}
	mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS\styleloginevent.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		.nav > ul > li:nth-child(5)
		{
			color: white;
			background-color: black;
		}
	</style>
</head>
<body>
		<?php 
			include 'header.php';
		?>
		<div class="heading fix">	
			<label>Login As a Event</label>
		</div>
		<div class="outerbox">
			<div class="innerbox">
				<span class="circle">
					<i class="fa fa-chevron-right" aria-hidden="true" ></i>
				</span>
				<span class="content">
					<h4>Welcome Back!</h4>
					<p>To keep connected with us please login with your personal info</p>
				</span>
			</div>
			<div class="formbox">
				<div class="form">
					<form action="login_event.php" method="post">
						<label>USER EMAIL</label>
						<input type="email" name="user_email" placeholder="Enter Your Email Id" required pattern="[A-Za-z0-9._%+-]+@[A-z0-9.-]+\.[a-z]{2,}$" title="Email id is not Valid"  autocomplete="off">
						<label>PASSWORD</label>
						<i class="fa fa-eye fa-lg" id="eye" aria-hidden="true"></i>
						<input type="password" name="password" id ="pwd" placeholder="Enter Your Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters"  autocomplete="off">
						<span class="btn">
							<input type="submit" name="submit" value="SIGN IN">
						</span>
					</form>
					<span>
						<p><a href="forgot_event_password.php"><b>Forgot Password?</b></a></p><p>Don't have an account?<a href="registar_event.php"><b>Sign Up</b></a></p>
					</span>
				</div>
			</div>

			<!-- Responsive Table -->
			<div class="rformbox">
				<div class="form">
					<form action="login_event.php" method="post">
						<label>USER EMAIL</label>
						<input type="email" name="user_email" placeholder="Enter Your Email Id" required pattern="[A-Za-z0-9._%+-]+@[A-z0-9.-]+\.[a-z]{2,}$" title="Email id is not Valid"  autocomplete="off">
						<label>PASSWORD</label>
						<i class="fa fa-eye fa-lg" id="eye1" aria-hidden="true"></i>
						<input type="password" name="password" id ="pwd1" placeholder="Enter Your Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters"  autocomplete="off">
						<span class="btn">
							<input type="submit" name="submit" value="SIGN IN">
						</span>
					</form>
					<span>
						<p><a href="forgot_event_password.php"><b>Forgot Password?</b></a></p><p>Don't have an account?<a href="registar_event.php"><b>Sign Up</b></a></p>
					</span>
				</div>
			</div>

		</div>
		<?php
	      include 'footer.php';
	    ?>
   		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/additional-methods.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
	var pwd1=document.getElementById('pwd1');
	var eye1=document.getElementById('eye1');
	var pwd=document.getElementById('pwd');
	var eye=document.getElementById('eye');
	eye.addEventListener('click',open);
	eye1.addEventListener('click',open);
	function open()
	{
		eye.classList.toggle('change');
		(pwd.type== 'password') ? pwd.type = 'text' : pwd.type = 'password';
		eye1.classList.toggle('change');
		(pwd1.type== 'password') ? pwd1.type = 'text' : pwd1.type = 'password';
	}
jQuery.validator.addMethod("checkemail", function(value, element) {
  // allow any non-whitespace characters as the host part
  return this.optional( element ) || /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i.test( value );
}, 'Please enter a valid email address.');






$(document).ready(function () {

    $('#myform').validate({ 
        rules: {
            fname: {
                required: true,
             	lettersonly:true,
               
            },
            lname:{
            	  required: true,
            	  lettersonly:true,

            },
            email:{
            	required:true,
            	email:true,
            	checkemail:true,
            },
            password:{
            	required:true,
            	minlength:7,
            	maxlength:15,

            },
            confirm_password:{
            	required:true,
            	minlength:7,
            	maxlength:15,
            	equalTo: "#password",


            },
            contect_no:{
            	required:true,
            	minlength:10,
            	maxlength:10,
            	digits:true,
            },
            img:{
            	required:true,
            	// uploadfile:true,
            	accept: "jpg,png,jpeg,gif",
            },
        
        },
        messages:{
        	fname:{
        		required:"firstname is required",
        		lettersonly:"enter letters only",
        	},
        	
        	lname:{
        		required:"last name is required",
        		lettersonly:"enter letters only",
        	},
        	email:{
        		required:"email required",
        		email:"enter valid email",
        		checkemail:"enter proper email",

        	},
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
			contect_no:{
				required:"contect no is required",
				minlength:"enter contect number 10digits",
				maxlength:"enter contect number 10digits",
				digits:"enter 10 digits",


			},
        	img:{
        		required:"upload image",
        		// uploadfile:"upload image",
        		accept:"upload image only jpg,jpeg,png ",


        	},
        },
    });

});
</script>

</body>
<script type="text/javascript">
	function share()
	{
		var a =document.getElementById("f");
		var b=document.getElementById("g");
		var c=document.getElementById("i");
		var d=document.getElementById("y");
		if (a.style.display === "none")
		{
			a.style.display="block";
			b.style.display="block";
			c.style.display="block";
			d.style.display="block";
		}
		else
		{
			a.style.display="none";
			b.style.display="none";
			c.style.display="none";
			d.style.display="none";
		}
	}
</script>
</html>