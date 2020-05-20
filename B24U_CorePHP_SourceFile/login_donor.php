<?php
	session_start();
	include('connection.php');
	error_reporting(1);

	if(isset($_POST['submit']))
	{
		$user_name = $_POST['user_name'];
		$password = md5($_POST['password']);

		$query = "SELECT * FROM donorlogin WHERE user_name='".$user_name."' AND password='".$password."' AND status=0 ";
		$result = mysqli_query($conn,$query);
		$count = mysqli_num_rows($result);
		if ($result)
		{
		 	
			if( $count == 1 )
			{
				$row = mysqli_fetch_array($result);
				$_SESSION['id'] = $row['id'];
				$_SESSION['old_user_name']=$row['user_name'];
				$_SESSION['user_name'] = $row['user_name'];
				$_SESSION['user_full_name'] = $row['user_full_name'];
				$_SESSION['user_email'] = $row['user_email'];
				$_SESSION['user_number'] = $row['user_number'];
				$date_of_birth=$row['date_of_birth'];
				$dated=date('d',strtotime($date_of_birth));
				$datem=date('m',strtotime($date_of_birth));
				$datey=date('Y',strtotime($date_of_birth));
				$_SESSION['date_of_birth'] = $dated.'-'.$datem.'-'.$datey;
				$_SESSION['date_of_birth_a']=$row['date_of_birth'];
				$_SESSION['password']=$row['confirm_password'];
				$_SESSION['confirm_password']=$row['confirm_password'];
				$_SESSION['Address']=$row['Address'];
				$_SESSION['pincode']=$row['pincode'];
				$from = new DateTime($_SESSION['date_of_birth']);
				$to   = new DateTime('today');
				$age=$from->diff($to)->y;
				if($age==$row['age'])
				{
					$_SESSION['age']=$row['age'];
				}
				else
				{
					$sql="UPDATE donorlogin SET age='".$age."' WHERE id='".$_SESSION['id']."' ";
					$result=mysqli_query($conn,$sql);
					$_SESSION['age']=$age;
				}
				$_SESSION['gender'] = $row['gender'];
				$_SESSION['blood_group'] = $row['blood_group'];
				$_SESSION['city'] = $row['city'];
				$_SESSION['weight'] = $row['weight'];
				$_SESSION['blood_pressure'] = $row['blood_pressure'];
				$_SESSION['pulse'] = $row['pulse'];
				$_SESSION['hemoglobin'] = $row['hemoglobin'];
				$_SESSION['last_donation'] = $row['last_donation'];
				$_SESSION['health_report'] = $row['health_report'];
				$_SESSION['last_place_donation'] = $row['last_place_donation'];
				$_SESSION['total_donation'] = $row['total_donation'];
				$_SESSION['attend_event'] = $row['attend_event'];
				$_SESSION['blood_donation'] = $row['blood_donation'];
				$_SESSION['pletlets_donation'] = $row['pletlets_donation'];
				$_SESSION['plasama_donation'] = $row['plasama_donation'];
				echo "<script> alert('Welcome ...!!!! ".$row['user_full_name']." '); 
				 window.location = 'donor_page.php';
				</script>";
			}
			else
			{
				echo "<script> alert('Username/password Combination does not match.'); </script>";
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
	<link rel="stylesheet" type="text/css" href="CSS\stylelogindonor.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<i class="fa fa-bars fa-2x " aria-hidden="true" ></i>
</head>
<body>
	
		<?php 
			include 'header.php';
		?>
			<div class="heading fix">
				<label>Login as a Donor</label>	
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
					<form action="login_donor.php" method="post">
						<label>USER NAME</label>
						<input type="text" name="user_name" placeholder="Enter Your User Name" required pattern="^[A-Za-z0-9._%+-@]{5,10}$" title="Enter a username between 5 to 10 letter"  autocomplete="off">
						<label>PASSWORD</label>
						<i class="fa fa-eye fa-lg" id="eye" aria-hidden="true"></i>
						<input type="password" name="password" placeholder="Enter Your Password" id="pwd1" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters"  autocomplete="off">
						<span class="btn">
							<input type="submit" name="submit" value="SIGN IN">
						</span>
					</form>
					<span>
						<p><a href="forgot_donor_password.php"><b>Forgot Password?</b></a></p><p>Don't have an account?<a href="registar_donor.php"><b>Sign Up</b></a></p>
					</span>
				</div>
			</div>

			<!-- Responsive Table -->

			<div class="rformbox">
				<div class="form">
					<form action="login_donor.php" method="post">
						<label>USER NAME</label>
						<input type="text" name="user_name" placeholder="Enter Your User Name" required pattern="^[A-Za-z0-9._%+-@]{5,10}$" title="Enter a username between 5 to 10 letter"  autocomplete="off">
						<label>PASSWORD</label>
						<i class="fa fa-eye fa-lg" id="eye1" aria-hidden="true"></i>
						<input type="password" name="password" placeholder="Enter Your Password" id="pwd" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters"  autocomplete="off">
						<span class="btn">
							<input type="submit" name="submit" value="SIGN IN">
						</span>
					</form>
					<span>
						<p><a href="forgot_donor_password.php"><b>Forgot Password?</b></a></p><p>Don't have an account?<a href="registar_donor.php"><b>Sign Up</b></a></p>
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
	var pwd=document.getElementById('pwd');
	var pwd1=document.getElementById('pwd1');
	var eye=document.getElementById('eye');
	var eye1=document.getElementById('eye1');
	eye.addEventListener('click',open);
	eye1.addEventListener('click',open);
	function open()
	{
		eye.classList.toggle('change');
		eye1.classList.toggle('change');
		(pwd.type== 'password') ? pwd.type = 'text' : pwd.type = 'password';
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